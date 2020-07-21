<?php
/**
 * AggregateSubcategory Fixture
 */
class AggregateSubcategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'aggregate_subcategory_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'aggregate_category_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => '4'),
		'aggregate_subcategory_name' => array('type' => 'string', 'null' => true, 'default' => null),
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
			'aggregate_subcategory_id' => 1,
			'aggregate_category_id' => 1,
			'aggregate_subcategory_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
