<?php
/**
 * Conversation Fixture
 */
class ConversationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'c_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'user_one' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => '4'),
		'user_two' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => '4'),
		'ip' => array('type' => 'string', 'null' => true, 'default' => 'NULL', 'length' => '30'),
		'created_datetime' => array('type' => 'datetime', 'null' => true, 'default' => 'NULL'),
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
			'c_id' => 1,
			'user_one' => 1,
			'user_two' => 1,
			'ip' => 'Lorem ipsum dolor sit amet',
			'created_datetime' => '2017-05-05 05:14:46'
		),
	);

}
