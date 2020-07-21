<?php

/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

    public function beforeSave($options = array()) {
        parent::beforeSave($options);
        //Encrypting finance data
        if (strtoupper($this->alias) == 'FINANCE') {
            foreach ($this->data[$this->alias] as $key => $val) {
                if ((!in_array($key, array('fin_id', 'dashboardfilter_id', 'created_by', 'modified_by', 'created_at', 'modified_at')) && @!empty($val)) && (isset($this->data[$this->alias][$key]) && $this->data[$this->alias][$key] != NULL && $this->data[$this->alias][$key] != '')) {
                        $result = $this->query("EXEC [dbo].[encrypts_data] '" . $this->data[$this->alias][$key] . "'");
                        $this->data[$this->alias][$key] = $result[0][0]['encoded'];
                }
            }
        } 
        //Encrypting user data
        elseif (strtoupper(trim($this->alias)) == 'USERMASTER') {
            foreach ($this->data[$this->alias] as $key => $val) {
                if ((!in_array($key, array('user_master_id', 'role_id', 'created_at', 'modified_at')) && @!empty($val)) && (isset($this->data[$this->alias][$key]) && $this->data[$this->alias][$key] != NULL && $this->data[$this->alias][$key] != '')) {
                        $result = $this->query("EXEC [dbo].[encrypts_data] '" . $this->data[$this->alias][$key] . "'");
                        $this->data[$this->alias][$key] = $result[0][0]['encoded'];
                }
            }
        }
        return true;
    }

    public function afterSave($created, $options = array()) {
        parent::afterSave($created, $options);
        if (strtoupper($this->alias) == 'FINANCE') {
            $lastId = $this->getLastInsertId();
            if (isset($lastId) && $lastId != "") {
                $this->query("EXEC [dbo].[calculate_finance] '" . $lastId . "'");
            }
        }
    }

    public function afterFind($results, $primary = false) {
        //Decryption finance data
        if (strtoupper($this->alias) == 'FINANCE') {
            foreach ($results as $key => $val) {
                foreach ($results[$key][$this->alias] as $column => $dataValue) {
                    if ((!in_array($column, array('fin_id', 'dashboardfilter_id', 'created_by', 'modified_by', 'created_at', 'modified_at')) && @is_array($results[$key][$this->alias]) && !empty($results[$key][$this->alias][$column])) && (isset($results[$key][$this->alias][$column]) && $results[$key][$this->alias][$column] != NULL && $results[$key][$this->alias][$column] != '')) {
                            $result = $this->query("EXEC [dbo].[decrypts_data] '" . $results[$key][$this->alias][$column] . "'");
                            $results[$key][$this->alias][$column] = $result[0][0]['decoded'];
                    }
                }
            }
        } 
        //Decryption usermaster data
        elseif ((strtoupper($this->alias) == 'USERMASTER') && (!empty($results))) {
                foreach ($results as $key => $val) {
                    if (!empty($results[$key][$this->alias])) {
                        foreach ($results[$key][$this->alias] as $column => $dataValue) {
                            if ((!in_array($column, array('user_master_id', 'role_id', 'created_at', 'modified_at')) && @is_array($results[$key][$this->alias]) && !empty($results[$key][$this->alias][$column])) && (isset($results[$key][$this->alias][$column]) && $results[$key][$this->alias][$column] != NULL && $results[$key][$this->alias][$column] != '')) {
                                    $result = $this->query("EXEC [dbo].[decrypts_data] '" . $results[$key][$this->alias][$column] . "'");
                                    $results[$key][$this->alias][$column] = $result[0][0]['decoded'];
                            }
                        }
                    }
                }
        }

        return $results;
    }

}
