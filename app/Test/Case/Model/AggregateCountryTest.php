<?php
App::uses('AggregateCountry', 'Model');

/**
 * AggregateCountry Test Case
 */
class AggregateCountryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aggregate_country',
		'app.aggregate_subcategory',
		'app.aggregate_category',
		'app.aggregate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AggregateCountry = ClassRegistry::init('AggregateCountry');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AggregateCountry);

		parent::tearDown();
	}

}
