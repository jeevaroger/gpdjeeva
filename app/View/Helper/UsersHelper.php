<?php

App::uses('Helper', 'View');
App::import("Model", "UserMaster");
App::import("Model", "Role");

/**
 * Market Helper 
 * 
 * @param var UserMaster object
 * Created By: Shashank
 * Created Date:27/11/2015
 * Modified By: Shashank
 * Modified Date: 27/11/2015
 */
class UsersHelper extends Helper {

    /**
     * UserMaster Model 
     * 
     * @var object
     */
    private $UserMaster;

    /**
     * Role Model 
     * 
     * @var object
     */
    private $Role;

    //Overriding construct
    public function __construct(\View $View, $settings = array()) {
        parent::__construct($View, $settings);
        $this->UserMaster = new UserMaster();
        $this->Role = new Role(); 
    }

    /**
     * getUserName method 
     * 
     * @return string
     * Created By: Shashank
     * Created Date:11/12/2015 
     * Modified By: 
     * Modified Date:  
     */
    public function getUserName($user_master_id) {
        $user = $this->UserMaster->find('first', array('conditions' => array('UserMaster.user_master_id' => $user_master_id)));
        return ucfirst($user['UserMaster']['first_name']).".".ucfirst($user['UserMaster']['last_name']);
    }
    
    
    public function getProfileInfo($user_master_id) {
        $user = $this->UserMaster->find('first', array('conditions' => array('UserMaster.user_master_id' => $user_master_id)));
        return array('ko_id' => $user['UserMaster']['user_sso_id'], 'email' => $user['UserMaster']['email'],
            'first_name' => ucfirst($user['UserMaster']['first_name']), 'last_name' => ucfirst($user['UserMaster']['last_name']),
        );
    }

    /**
     * Get roles dropdown
     *
     * @param integer
     * Created By: Shashank
     * Created Date:16/02/2016
     * Modified By: 
     * Modified Date: 
     */
    public function roleDropDown($default_selected = 0) {
        $content = "<select name='role_list' id='role_list' class='search-box' style='width:205px;font-size:14px'>";
        $content.="<option value='0' " . ($default_selected == 0 ? 'selected' : '') . ">All</option>";
        $role_list = $this->Role->find('list', array('fields' => array('role_id', 'role_name'), 'recursive' => 0));
        if (!empty($role_list)) :
            foreach ($role_list as $value => $text) :
                $content.="<option value='" . $value . "' " . ($default_selected == $value ? 'selected' : '') . ">" . $text . "</option>";
            endforeach;
        endif;
        return $content.="</select>";
    }
}
