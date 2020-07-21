<?php
App::uses('Aggregate', 'Model');

/**
 * Aggregate Test Case
 */
class AggregateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aggregate'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Aggregate = ClassRegistry::init('Aggregate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aggregate);

		parent::tearDown();
	}

}
