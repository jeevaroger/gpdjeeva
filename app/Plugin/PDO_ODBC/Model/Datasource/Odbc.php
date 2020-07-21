<?php

/**
 * ODBC layer for DBO
 * Helpful for Linux connection to MS SQL Server via ODBC
 */
App::uses('Sqlserver', 'Model/Datasource/Database');

class Odbc extends Sqlserver {

    /**
     * Driver description
     *
     * @var string
     */
    public $description = "ODBC DBO Driver";

    /**
     * connection odbc
     * Will be required to keep the resource connection of ODBC
     * @var $odbc_resource
     */
    private $odbc_resource; 

    /**
     * Base configuration settings for MS SQL driver
     *
     * @var array
     */
    protected $_baseConfig = array(
        'persistent' => true,
        'host'       => 'localhost\SQLEXPRESS',
        'port'       => '',
        'driver'     => '',
        'login'      => '',
        'password'   => '',
        'database'   => 'cake',
        'schema'     => '',
        'version'    => '',
    );

    /**
     * Connects to the database using options in the given configuration array.
     *
     * @return boolean True if the database could be connected, else false
     * @throws MissingConnectionException
     */
    public function connect() {
        $config = $this->config;
        $this->connected = false;

        try {
            $flags = array(
                PDO::ATTR_PERSISTENT => $config['persistent'],
                PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
            );
            if (!empty($config['encoding'])) {
                $flags[PDO::ODBC_ATTR_ASSUME_UTF8] = $config['encoding'];
            }

            #ODBC PDO based connection
            $this->_connection = new PDO("odbc:" . $config['host'], $config['login'], $config['password']);
            $this->_connection->query('use ' . $this->config['database']);

            if (!empty($this->odbc_resource)) {
                odbc_close($this->odbc_resource);
            }
            #ODBC resourece based connection
            $this->odbc_resource = odbc_connect($this->config['host'], $config['login'], $config['password']);
            odbc_exec($this->odbc_resource, 'use ' . $this->config['database']);

            $this->connected = true;
        } catch (PDOException $e) {
            throw new MissingConnectionException(array(
        'class'   => get_class($this),
        'message' => $e->getMessage()
            ));
        }
        return $this->connected;
    }

    /**
     * Check that PDO SQL Server is installed/loaded
     *
     * Overriding function enabled
     * Created By: Shashank
     * Created Date:15/03/2015
     * Modified By: 
     * Modified Date:  
     * @return boolean
     */
    public function enabled() {
        return in_array('odbc', PDO::getAvailableDrivers());
    }

    /**
     * Executes given SQL statement.
     *
     * @param string $sql SQL statement
     * @param array $params list of params to be bound to query
     * @param array $prepareOptions Options to be used in the prepare statement
     * @return mixed PDOStatement if query executes with no problem, true as the result of a successful, false on error
     * query returning no rows, such as a CREATE statement, false otherwise
     * @throws PDOException
     */
    protected function _execute($sql, $params = array(), $prepareOptions = array()) {
        $sql = trim($sql);
        if (preg_match('/^(?:CREATE|ALTER|DROP)\s+(?:TABLE|INDEX)/i', $sql)) {
            $statements = array_filter(explode(';', $sql));
            if (count($statements) > 1) {
                $result = array_map(array($this, '_execute'), $statements);
                return array_search(false, $result) === false;
            }
        }
        try {
            $query = $this->_connection->prepare($sql);
            $query->setFetchMode(PDO::FETCH_LAZY);
            if (!$query->execute()) {
                $this->_results = $query;
                $query->closeCursor();
                return false;
            }
            if (!$query->columnCount()) {
                $query->closeCursor();
                if (!$query->rowCount()) {
                    return true;
                }
            }
            return $query;
        } catch (PDOException $e) {
            if (isset($query->queryString)) {
                $e->queryString = $query->queryString;
            } else {
                $e->queryString = $sql;
            }
            throw $e;
        }
    }

    /**
     * Gets the version string of the database server
     *
     * @return string The database version
     */
    public function getVersion() {
        return $this->config['version'];
    }

    /**
     * Modified By: Shashank
     * Modified Date: 15/03/2015  
     * Builds a map of the columns contained in a result
     *
     * @param PDOStatement $results
     * @return void
     */
    public function resultSet($results) {
        $this->map = array();
        $numFields = $results->columnCount();
        $index = 0;
        try {
            while ($numFields-- > 0) {
                #ODBC resourece based functions used to overcome the problem of getColumnMeta
                $statement = odbc_prepare($this->odbc_resource, $results->queryString);
                $name = odbc_field_name($statement, $index + 1);
                if (strpos($name, '__')) {

                    if (isset($this->_fieldMappings[$name]) && strpos($this->_fieldMappings[$name], '.')) {

                        $map = explode('.', $this->_fieldMappings[$name]);
                    } elseif (isset($this->_fieldMappings[$name])) {
                        $map = array(0, $this->_fieldMappings[$name]);
                    } else {
                        $map = array(0, $name);
                    }
                } else {
                    $map = array(0, $name);
                }

                $map[] = odbc_field_type($statement, $index + 1);

                $this->map[$index++] = $map;
            }
        } catch (Exception $exception) {
            throw new UnexpectedValueException('Result-set:' . $exception->getMessage());
        }
    }

    /**
     * Overriding function value
     * Modified By: Shashank
     * Modified Date: 15/03/2015  
     *
     * Returns a quoted and escaped string of $data for use in an SQL statement.
     *
     * @param string $data String to be prepared for use in an SQL statement
     * @param string $column The column into which this data will be inserted
     * @return string Quoted and escaped data
     */
    public function value($data, $column = null, $null = true) {

        if (is_array($data) && !empty($data)) {
            return array_map(
                    array(&$this, 'value'), $data, array_fill(0, count($data), $column)
            );
        } elseif (is_object($data) && isset($data->type, $data->value)) {
            if ($data->type == 'identifier') {
                return $this->name($data->value);
            } elseif ($data->type == 'expression') {
                return $data->value;
            }
        } elseif (in_array($data, array('{$__cakeID__$}', '{$__cakeForeignKey__$}'), true)) {
            return $data;
        }
        if ($data === null || (is_array($data) && empty($data))) {
            return 'NULL';
        }

        if (empty($column)) {
            $column = $this->introspectType($data);
        }
        switch ($column) {
            case 'binary':
                return $this->_connection->quote($data, PDO::PARAM_LOB);
            case 'boolean':
                return "'" . $this->boolean($data, true) . "'";
            case 'string':
            case 'text':               
            case 'datetime':                
            case 'decimal':
                return "'$data'";
            default:
                if ($data === '') {
                    return 'NULL';
                }
                if (is_float($data)) {
                    return str_replace(',', '.', strval($data));
                }
                if ((is_int($data) || $data === '0') || (
                        is_numeric($data) && strpos($data, ',') === false &&
                        $data[0] != '0' && strpos($data, 'e') === false)
                ) {
                    return $data;
                }
                return $this->_connection->quote($data);
        }
    }

    /**
     * Fetches the next row from the current result set.
     * Eats the magic ROW_COUNTER variable.
     *
     * @return mixed
     */
    public function fetchResult() {
        //### HERE IS WHERE IT RESETS ###
        if ($row = $this->_result->fetch(PDO::FETCH_NUM)) { 
            $resultRow = array();

            foreach ($this->map as $col => $meta) {
                list($table, $column, $type) = $meta;
                if ($table === 0 && $column === self::ROW_COUNTER) {
                    continue;
                }
                $resultRow[$table][$column] = $row[$col];
                if ($type === 'boolean' && !is_null($row[$col])) {
                    $resultRow[$table][$column] = $this->boolean($resultRow[$table][$column]);
                }
            }

            return $resultRow;
        }

        $this->_result->closeCursor();
        return false;
    }

    public function read(Model $model, $queryData = array(), $recursive = null) {
        $results = parent::read($model, $queryData, $recursive);
        $this->_fieldMappings = array();
        return $results;
    }

    /**
     * Function Overrided
     * Base Class: DboSource
     * Created By: Shashank
     * Created Date:15/03/2015
     * Modified By: 
     * Modified Date:  
     * Function to get the last inserted id, ODBC driver does not support the last inserted id function
     * */
    public function lastInsertId($source = null) {
        $sql = "SELECT @@IDENTITY as id;";
        $result = $this->fetchRow($sql);
        return $result[0]['id'];
    }

    /**
     * Function Overrided
     * Base Class: DboSource
     * Created By: Shashank
     * Created Date:15/03/2015
     * Modified By: 
     * Modified Date:  
     * Modified the function to add function for the batch processing according to the solution
     * */
    public function insertMulti($table, $fields, $values) {
        $primaryKey = $this->_getPrimaryKey($table);
        $hasPrimaryKey = $primaryKey && (
                (is_array($fields) && in_array($primaryKey, $fields) || (is_string($fields) && strpos($fields, $this->startQuote . $primaryKey . $this->endQuote) !== false))
                );

        if ($hasPrimaryKey) {
            $this->_execute('SET IDENTITY_INSERT ' . $this->fullTableName($table) . ' ON');
        }

        $this->insertMultiData($table, $fields, $values);

        if ($hasPrimaryKey) {
            $this->_execute('SET IDENTITY_INSERT ' . $this->fullTableName($table) . ' OFF');
        }
    }

    /**
     * Custom Function
     * Created By: Shashank
     * Created Date:15/03/2015
     * Modified By: 
     * Modified Date:  
     * Batch processing function
     * */
    public function insertMultiData($table, $fields, $values) {
        try {
            $table = $this->fullTableName($table);
            $fields = implode(', ', array_map(array(&$this, 'name'), $fields));

            $pdoMap = array(
                'integer' => PDO::PARAM_INT,
                'float'   => PDO::PARAM_STR,
                'boolean' => PDO::PARAM_BOOL,
                'string'  => PDO::PARAM_STR,
                'text'    => PDO::PARAM_STR
            );
            $columnMap = array();

            $this->begin();

            foreach ($values[key($values)] as $key => $val) {
                $type = $this->introspectType($val);
                $columnMap[$key] = $pdoMap[$type];
            }

            foreach ($values as $value) {
                $i = 1;
                $sql = "INSERT INTO {$table} ({$fields}) VALUES ( ";
                foreach ($value as $val) {
                    $sql.=$this->value($val) . ',';
                    $i += 1;
                }
                $sql = substr($sql, 0, -1);
                $sql.=")";
                $statement = $this->_connection->prepare($sql);
                $statement->execute();
                $statement->closeCursor();
                if ($this->fullDebug) {
                    $this->logQuery($sql, $value);
                }
            }
            return $this->commit();
        } catch (Exception $exception) {
            throw new UnexpectedValueException('Insert-Multiple:' . $exception->getMessage());
        }
    }

    /**
     * overriding close function
     * Created By: Shashank
     * Created Date:30/03/2015
     * Modified By: 
     * Modified Date:  
     * 
     * */
    public function close() {
        if (!empty($this->odbc_resource)) {
            odbc_close($this->odbc_resource);
        }
        parent::close();
    }

}
