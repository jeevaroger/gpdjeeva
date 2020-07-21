<?php
App::uses('AggregatesCategory', 'Model');

/**
 * AggregatesCategory Test Case
 */
class AggregatesCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aggregates_category',
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
		$this->AggregatesCategory = ClassRegistry::init('AggregatesCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AggregatesCategory);

		parent::tearDown();
	}

}
