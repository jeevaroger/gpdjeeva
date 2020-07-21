<?php
header("Cache-Control: no cache");
header('X-Frame-Options: SAMEORIGIN');
session_cache_limiter("must-revalidate");
if(session_id() == '') {
   session_start();
}


/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array('AccessResource', 'Session', 'Dashboard','Upload', 'Gsc');
    var $uses = array('Market');
    public $userId;
    public $roleResources = array();
    public $helper = array('Users');

    /**
     * beforeFilter method this function is executed before every action in the controller
     * 
     * @return void
     * Created By: Shashank,Anoop
     * Created Date:10/12/2015
     * Modified By: Shashank
     * Modified Date: 10/12/2015 
     */
    public function beforeFilter() {
        //CakeSession::start();
        // In case if issue in siteminder response then for showing error page
        if($this->action == LOGIN_ERROR || $this->action == 'logout') {
           return true;
        }
        
        //Checking session and auth   
        if ($this->name != CONTROLLER_LOGIN && ($this->action != LOGIN_INDEX || $this->action != LOGIN_POST)) {
            
            if (!$this->Session->check('User')) {

                $this->Session->setFlash('Please login');
                return $this->redirect(array('controller' => 'Errors','action' => 'loginError'));
            }


            /* Logic to check role-resource access */
            $roleID = $this->Session->read('User')['role_id'];
            
            $this->roleResources = $this->AccessResource->getRoleResources($roleID);           
            $this->set('roleResources', $this->roleResources['Resource']);
            $this->set('userRole', $this->roleResources['Role']);

            $routeName = $this->request->params['pass'];

            $this->set(compact('routeName'));

            $this->AccessResource->checkRouteAccess($roleID, $this->name, $this->action);

            /* logic to get allowed market list */
            //user id from session
            $this->userId = $this->Session->read('User')['user_master_id']; 
           // $this->userId = 9753;
            // logic for releasing keytakeouts and notes 
           
            if (($this->action != DASHBOARD_LOCK_CHECK && $this->action != DASHBOARD_LOCK_AJAX && $this->action != UPLOADACTION && $this->action !=UPLOADSHEETDATA) ) {
                $this->Dashboard->releaseDashboardLock($this->userId);
               
                if($this->roleResources['Role']['ad_group'] == WNS_UPLOAD){
                    $emptyTempData = "";
                    $this->Upload->writeSheetDataToTemp($emptyTempData, false);
                }
            }
        }
    }

    /**
     * afterFilter method this function is executed after every action in the controller
     * 
     * @return void
     * Created By: Anoop
     * Created Date:10/12/2015
     * Modified By: 
     * Modified Date:  
     */
    function afterFilter() {
        if ($this->response->statusCode() == '404') {
            
            $this->redirect(array(
                'controller' => 'errors',
                'action' => 'error404')
            );
        }
    }

    /**
     * beforeRender method this function is executed before every view
     * 
     * @return void
     * Created By: Shashank,Anoop
     * Created Date:10/12/2015
     * Modified By: 
     * Modified Date:  
     */
    public function beforeRender() {
        parent::beforeRender();
        if ($this->Session->check('User')) {
            $this->set('user_master_id', $this->Session->read('User')['user_master_id']);
            $this->set('role_name', strtoupper($this->Session->read('User')['role_name']));
            $this->set('action_name', strtoupper($this->action));
            $this->set('controller_name', strtoupper($this->name));
            $this->set('ad_group', strtoupper($this->Session->read('User')['ad_group']));
            $this->set('user_role_id', $this->Session->read('User')['role_id']);
        } else {
            $this->set('user_master_id', 0);
            $this->set('role_name', '');
            $this->set('action_name', strtoupper($this->action));
            $this->set('controller_name', strtoupper($this->name));
            $this->set('ad_group', '');
            $this->set('user_role_id', '');
        }
        
      
        $periods = $this->Gsc->getPastPublicationPeriod();
        /*$fy = array_shift($periods);
        array_push($periods, $fy);*/
        $lastPeriod = (!empty($periods[0])) ? $periods[0] : '';
        $this->set('gscCategories', $this->Gsc->getGscCategories());
        $this->set('lastPeriod', $lastPeriod);
       
        
    }

    /**
     * blackhole method
     * 
     * @return void
     * Created By: Shashank
     * Created Date:14/1/2016
     * Modified By: 
     * Modified Date:  
     */
    public function blackhole($errorType) {
        
    }

}
