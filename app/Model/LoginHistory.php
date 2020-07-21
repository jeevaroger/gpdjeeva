<?php

App::uses('AppModel', 'Model');

/**
 * LoginHistory Model

 */
class LoginHistory extends AppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'login_history';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'login_history_id';

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'email';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'user_master_id' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
            'numeric' => array(
                'rule' => array('numeric'),
            ),
        ),
        'user_sso_id' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => ' This is a required field',
            ),
            'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'required' => true,
                'message' => ' KO ID should contain alphanumeric value of 1-10 characters in length'
            ),
        ),
        'first_name' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => ' This is a required field',
            ),
            'rule' => '/^[a-z ]{1,25}$/i',
            'message' => ' First Name should contain only alphabets of 1-25 characters in length'
        ),
        'email' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => ' This is a required field',
            ),
            'email' => array(
                'rule' => array('email'),
                'message' => ' Please enter valid email',
            ),
        ),
    );

}
