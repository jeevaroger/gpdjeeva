<?php
App::uses('AggregateUserMap', 'Model');

/**
 * AggregateUserMap Test Case
 */
class AggregateUserMapTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aggregate_user_map',
		'app.user_master',
		'app.role',
		'app.role_resource',
		'app.roleresource_map',
		'app.market',
		'app.clust_market_map',
		'app.market_user_map',
		'app.aggregate_subcategory',
		'app.aggregate_country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AggregateUserMap = ClassRegistry::init('AggregateUserMap');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AggregateUserMap);

		parent::tearDown();
	}

}
