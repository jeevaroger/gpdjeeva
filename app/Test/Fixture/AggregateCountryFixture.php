<?php
/**
 * AggregateCountry Fixture
 */
class AggregateCountryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'aggregate_country_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'aggregate_subcategory_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => '4'),
		'aggregate_country_iso_two_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => '10'),
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
			'aggregate_country_id' => 1,
			'aggregate_subcategory_id' => 1,
			'aggregate_country_iso_two_code' => 'Lorem ip'
		),
	);

}
