<?php
/**
 * Aggregate Fixture
 */
class AggregateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'aggregate_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'aggregate_name' => array('type' => 'string', 'null' => true, 'default' => null),
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
			'aggregate_id' => 1,
			'aggregate_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
