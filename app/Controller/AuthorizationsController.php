<?php

App::uses('AppController', 'Controller');

/**
 * Authorizations Controller
 *
 * @property components $components
 * @property Models $uses
 * Created By: Shashank
 * Created Date:10/12/2015 
 * Modified By: Shashank
 * Modified Date: 11/12/2015
 */
class AuthorizationsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Flash', 'Dashboard', 'Security', 'Siteminder.Authorizations');

    /**
     * Models
     *
     * @var array
     */
    public $uses = array('UserMaster', 'Role');

    /**
     * index method for login
     * 
     * @return void
     * Created By: Shashank
     * Created Date:10/12/2015 
     * Modified By: Anoop
     * Modified Date: 29/04/2016 
     */
    public function index() {

        
        $user_sso_id = "jeeva";
        $role_group = WNS_UPLOAD;
        if (!empty($user_sso_id) && !empty($role_group)) {
            $userMaster = $this->UserMaster->getUserBySSOId($user_sso_id);
            if (!empty($userMaster)) {
                //Updating user role if not assigned according to SSO
                $this->Session->write('User.user_master_id', $userMaster['UserMaster']['user_master_id']);
                //$this->Session->write('User.role_id', $userMaster['Role']['role_id']);
                $this->Session->write('User.role_id', 7);
                $this->Session->write('User.role_name', $userMaster['Role']['role_name']);
                $this->Session->write('User.ad_group', $userMaster['Role']['ad_group']);
                //return $this->redirect(Configure::read('UserRedirect')[trim($userMaster['Role']['ad_group'])]);
                return $this->redirect(array('controller' => 'gsc', 'action' => 'myindex'));
            }
        }
    }

  
    public function logout() {

        $this->layout = false;
        $this->autoRender = false;
        if ($this->Session->check('User')) {
            $this->Dashboard->releaseDashboardLock($this->Session->read('User')['user_master_id']);
        }

        try {
            if (isset($_SERVER['HTTP_COOKIE'])) {
                $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
                if (!empty($cookies)) {
                    foreach ($cookies as $cookie) {
                        $parts = explode('=', $cookie);
                        $name = trim($parts[0]);
                        setcookie($name, '', time() - 1000);
                        setcookie($name, '', time() - 1000, '/');

                        setcookie($name, '', time() - 1000, '/', 'devko.com');
                    }
                }
            }
        } catch (Exception $e) {
            $this->Session->destroy();
            return $this->redirect(SITEMINDER_LOGOUT);
        }
        $this->Session->destroy();
//         /var_dump($e);exit;
        return $this->redirect(SITEMINDER_LOGOUT);
    }

  
    public function beforeFilter() {

        parent::beforeFilter();
        $this->Security->csrfExpires = CSRF_EXPIRES;
        $this->Security->validatePost = false;
        $this->Security->blackHoleCallback = 'blackhole';
    }

}
