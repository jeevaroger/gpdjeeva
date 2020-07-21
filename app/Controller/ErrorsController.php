<?php

App::uses('AppController', 'Controller');

/**
 * Errors Controller
 *
 */
class ErrorsController extends AppController {

    public $name = 'Errors';

    public function error404() {
        $this->layout = 'error';
    }

    /**
     * loginError method
     * 
     * @return void
     * Created By: Harish
     * Created Date:25/02/2016 
     * Modified By: 
     * Modified Date:
     */
    public function loginError() {

        if (empty($this->params->query['error'])) {
            $errorMessage = INVALID_REQUEST_ERROR;
        } else {
            $errorCode = $this->params->query['error'];
            if ($errorCode == 'ERR1') {
                $errorMessage = UNABLE_TO_ACCESS_DASHBOARD;
            } else {
                $errorMessage = INVALID_REQUEST_ERROR;
            }
        }
        $this->set('errorMessage', $errorMessage);
        $this->layout = 'login';
    }
    
    
    public function loginRequest() {
        $this->layout = 'gsc';
    }

}
