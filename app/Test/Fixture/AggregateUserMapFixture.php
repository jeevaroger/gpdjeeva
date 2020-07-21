<?php
/**
 * AggregateUserMap Fixture
 */
class AggregateUserMapFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'aggregate_user_map_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'user_master_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => '4'),
		'aggregate_subcategory_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => '4'),
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
			'aggregate_user_map_id' => 1,
			'user_master_id' => 1,
			'aggregate_subcategory_id' => 1
		),
	);

}
