<?php
App::uses('AggregateSubcategory', 'Model');

/**
 * AggregateSubcategory Test Case
 */
class AggregateSubcategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aggregate_subcategory',
		'app.aggregate_category',
		'app.aggregate',
		'app.aggregate_country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AggregateSubcategory = ClassRegistry::init('AggregateSubcategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AggregateSubcategory);

		parent::tearDown();
	}

}
