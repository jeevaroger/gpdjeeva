<?php

/**
 * Description of MemcacheHandler 
 * Created By: Shashank
 * Created Date:27/11/2015
 * Modified By: Shashank
 * Modified Date: 10/12/2015 
 */
class MemcacheHandler {
    /*
     * Read Cache Method
     * 
     * @return result array OR false (is memcached is disabled)
     * Created By: Shashank
     * Created Date:27/11/2015
     * Modified By: Shashank
     * Modified Date: 10/12/2015 
     */
    public static function readCache($key, $config = 'default') {
        if (Configure::read('memcachedFlag')) {
            return Cache::read($key, $config);
        } else {
            return false;
        }
    }

    /*
     * Write Cache Method
     * @return void
     * Created By: Shashank
     * Created Date:27/11/2015
     * Modified By: Shashank
     * Modified Date: 10/12/2015 
     */
    public static function writeCache($key, $value, $config = 'default') {
        if (Configure::read('memcachedFlag') && isset($value) && !empty($value)) {
            return Cache::write($key, $value, $config);
        } else {
            return false;
        }
    }
    
    
    /*
     * Delete Cache value
     * 
     *  */
    public static function deleteCache($key, $config = 'default'){
        if(Configure::read('memcachedFlag')){
            return Cache::delete($key, $config );
        }else{
            return false;
        }
    }

}
