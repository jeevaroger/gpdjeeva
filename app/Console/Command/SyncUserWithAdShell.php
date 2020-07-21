<?php

/**
 * SyncUserWithAd Shell
 *
 * Created By: Anoop
 * Created Date:02/05/2016
 * Modified By: 
 * Modified Date:  
 */

class SyncUserWithAdShell extends AppShell {

    public $uses = array('UserMaster','Role');
    public $tasks = array('Ldap');

    public function main() {
        
        $this->Ldap->execute();
        if ($this->Ldap->getBind()) {

            /* start process data via LDAP */
            $roles = Configure::read('UserGroup');
            foreach ($roles as $role) {
                $query = "(&(objectClass=group)(CN=$role))";
                $result = $this->Ldap->ldap_search($query, array('member'));
                $info = $this->Ldap->ldap_get_entries($result);
                if (!empty($info)) {
                    MemcacheHandler::writeCache('LDAP_ROLE_'.$role, $info, 'ldap');
                }
            }
            /* end process data via LDAP */
        } else {
            CakeLog::write('ldap', 'Failed to bind ldap');
        }
    }

}
