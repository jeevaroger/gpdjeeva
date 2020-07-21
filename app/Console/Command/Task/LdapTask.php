<?php

/**
 * ldap Task
 *
 * Created By: Anoop
 * Created Date:02/05/2016
 * Modified By: 
 * Modified Date:  
 */
class LdapTask extends Shell {

    /**
     * connection resource 
     *
     * @var object
     */
    private $ldap_connection;

    /**
     * ldap config 
     *
     * @var array
     */
    private $ldap_config;

    /**
     * ldap bind 
     *
     * @var array
     */
    private $bind;

    public function execute() {

        try {
            $this->ldap_config = Configure::read('LDAP');

            set_error_handler(array($this, 'warning_handler'), E_WARNING);
            $this->ldap_connection = ldap_connect($this->ldap_config['host']);
            restore_error_handler();

            $this->bind_connection();
        } catch (CakeException $ex) {
            CakeLog::write('ldap', $ex->getMessage());
            throw new MissingConnectionException('Could not connect to ldap host:' . $ex->getMessage());
        }
    }

    public function getLdap_connection() {
        return $this->ldap_connection;
    }

    public function getLdap_config() {
        return $this->ldap_config;
    }

    public function getBind() {
        return $this->bind;
    }

    public function bind_connection() {
        try {
            set_error_handler(array($this, 'warning_handler'), E_WARNING);
            $this->bind = ldap_bind($this->ldap_connection, $this->ldap_config['user_name'], $this->ldap_config['password']);
            restore_error_handler();
        } catch (HttpException $ex) {
            CakeLog::write('ldap', 'Could not bind to ldap host:' . $ex->getMessage());
            throw new NotFoundException('Could not bind to ldap host:' . $ex->getMessage());
        }
    }

    public function __destruct() {
        try {
            if (!empty($this->ldap_connection)) {
                set_error_handler(array($this, 'warning_handler'), E_WARNING);
                ldap_close($this->ldap_connection);
                restore_error_handler();
            }
        } catch (HttpException $ex) {
            CakeLog::write('ldap', 'Could not close ldap:' . $ex->getMessage());
            throw new NotFoundException('Could not close ldap:' . $ex->getMessage());
        }
    }

    public function ldap_search($query, $attribute = array(), $size_limit = NULL) {
        try {
            $attrsonly = 0;
            $timelimit = NULL;
            $deref = NULL;

            set_error_handler(array($this, 'warning_handler'), E_WARNING);
            
            return ldap_search($this->ldap_connection, $this->ldap_config['ds'], "$query", $attribute, $attrsonly, $size_limit, $timelimit, $deref);
            
        } catch (Exception $ex) {
            CakeLog::write('ldap', 'ldap search fails:' . $ex->getMessage());
            throw new InvalidArgumentException('ldap search fails:' . $ex->getMessage());
        }
    }

    public function ldap_get_entries($result) {
        try {
            set_error_handler(array($this, 'warning_handler'), E_WARNING);

            return ldap_get_entries($this->ldap_connection, $result);
            
        } catch (Exception $ex) {
            CakeLog::write('ldap', 'ldap get entries fails:' . $ex->getMessage());
            throw new InvalidArgumentException('ldap get entries fails:' . $ex->getMessage());
        }
    }

    public function warning_handler($errno, $errstr) {
        CakeLog::write('ldap', $errstr);
    }

}
