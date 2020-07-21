<?php

App::uses('AppController', 'Controller');

class AuthorizationsController extends AppController {

    public function index() {

        echo 'This is GPD Cloud App, Here you go !!! Hurray !!!'; 
    }

  
    public function logout() {

      
    }

  
    public function beforeFilter() {
        parent::beforeFilter();
        
    }

}
