<?php

App::uses('Component', 'Controller');

/**
 * @package       app.Controller.Component
 * 
 * Created By: Anoop
 * Created Date: 11/25/2015
 * Modified By: Anoop
 * Modified Date: 12/15/2015
 */
class AccessResourceComponent extends Component {

    private $roleResources;

    /**
     * getUserSpecificResource 
     * Function to get user specific resources
     * Created By: Anoop
     * Created Date: 12/04/2015
     * Modified By: 
     * Modified Date: 
     */
    public function getUserSpecificResource($id) {

        App::import('Model', 'Role');
        $role = New Role();
        return $role->getUserSpecificResource($id);        
    }

    /*
     * getRoleResources
     * Function to get allowed resources list as per the role
     * Created By: Anoop
     * Created Date: 12/04/2015
     * Modified By: 
     * Modified Date:  
     */

    public function getRoleResources($roleId) {

        if (!isset($this->roleResources) || empty($this->roleResources)) {
            $this->roleResources = $this->getUserSpecificResource($roleId);
        }
        return $this->roleResources;
    }

    /*
     * checkRouteAccess
     * Function to check route access based on user's allowed resources
     * Created By: Anoop
     * Created Date: 12/04/2015
     * Modified By: 
     * Modified Date:   
     *      
     */

    public function checkRouteAccess($roleId, $cntrlName, $actName) {

        if (!isset($this->roleResources) || empty($this->roleResources)) {
            $this->roleResources = $this->getUserSpecificResource($roleId);
        }

        $routeResourceMapArray = Configure::read('RouteResourceMap');
      

        $controllerAction = $cntrlName . '___' . $actName;
        $controllerWithAllAction = $cntrlName . '___*';
        $restrictFlag = 0;
        if (isset($routeResourceMapArray[$controllerAction])) {
            foreach ($routeResourceMapArray[$controllerAction] as $key => $value) {
                $restrictFlag = 1;
                if (in_array($value, $this->roleResources['Resource'])) {
                    $restrictFlag = 0;
                    break;
                }
            }
        } elseif (isset($routeResourceMapArray[$controllerWithAllAction])) {
            foreach ($routeResourceMapArray[$controllerWithAllAction] as $key => $value) {
                $restrictFlag = 1;
                if (in_array($value, $this->roleResources['Resource'])) {
                    $restrictFlag = 0;
                    break;
                }
            }
        }

        if ($restrictFlag == 1) {
        
            $this->controller->redirect(array(
                'controller' => 'errors',
                'action' => 'error404')
            );
        }
    }

    /*
     * checkRouteAccess
     * Function to wrap controller instance
     * Created By: Anoop
     * Created Date: 12/04/2015
     * Modified By: 
     * Modified Date:   
     *      
     */
    function initialize(Controller $controller) {
        $this->controller = $controller;
    }

}
