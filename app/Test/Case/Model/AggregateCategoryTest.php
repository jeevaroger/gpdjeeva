<?php
App::uses('AggregateCategory', 'Model');

/**
 * AggregateCategory Test Case
 */
class AggregateCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aggregate_category',
		'app.aggregate',
		'app.aggregate_subcategory'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AggregateCategory = ClassRegistry::init('AggregateCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AggregateCategory);

		parent::tearDown();
	}

}
