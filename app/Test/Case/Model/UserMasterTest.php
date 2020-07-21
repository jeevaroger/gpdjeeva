<?php
App::uses('UserMaster', 'Model');

/**
 * UserMaster Test Case
 */
class UserMasterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_master',
		'app.role',
		'app.roleresource_map',
		'app.market',
		'app.clust_market_map',
		'app.market_user_map'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserMaster = ClassRegistry::init('UserMaster');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserMaster);

		parent::tearDown();
	}

}
