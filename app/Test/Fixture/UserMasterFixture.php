<?php
/**
 * UserMaster Fixture
 */
class UserMasterFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'user_master';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_master_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'user_sso_id' => array('type' => 'string', 'null' => true, 'default' => null),
		'role_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => '4'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => null),
		'email' => array('type' => 'string', 'null' => true, 'default' => null),
		'created_at' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_at' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'user_master_id' => 1,
			'user_sso_id' => 'Lorem ipsum dolor sit amet',
			'role_id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'created_at' => '2015-11-26 17:02:50',
			'modified_at' => '2015-11-26 17:02:50'
		),
	);

}
