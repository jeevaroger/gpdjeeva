<?php
/**
 * ConversationReply Fixture
 */
class ConversationReplyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'cr_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'reply' => array('type' => 'text', 'null' => true, 'default' => null),
		'user_master_id_fk' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => '4'),
		'ip' => array('type' => 'string', 'null' => true, 'default' => 'NULL', 'length' => '30'),
		'created_datetime' => array('type' => 'datetime', 'null' => true, 'default' => 'NULL'),
		'c_id_fk' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => '4'),
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
			'cr_id' => 1,
			'reply' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'user_master_id_fk' => 1,
			'ip' => 'Lorem ipsum dolor sit amet',
			'created_datetime' => '2017-05-05 05:16:50',
			'c_id_fk' => 1
		),
	);

}
