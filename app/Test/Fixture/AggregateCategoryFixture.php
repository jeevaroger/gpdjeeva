<?php
/**
 * AggregateCategory Fixture
 */
class AggregateCategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'aggregate_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'aggregate_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => '4'),
		'aggregate_category_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => '150'),
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
			'aggregate_category_id' => 1,
			'aggregate_id' => 1,
			'aggregate_category_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
