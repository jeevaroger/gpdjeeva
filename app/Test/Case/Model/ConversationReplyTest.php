<?php
App::uses('ConversationReply', 'Model');

/**
 * ConversationReply Test Case
 */
class ConversationReplyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.conversation_reply',
		'app.cr'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ConversationReply = ClassRegistry::init('ConversationReply');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ConversationReply);

		parent::tearDown();
	}

}
