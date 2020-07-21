<?php
App::uses('AppModel', 'Model');
/**
 * Brand Model
 *
 */
class Brand extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'brand';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'brand_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'brand_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'brand_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),

			),
			'notBlank' => array(
				'rule' => array('notBlank'),

			),
		),
		'brand_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),

			),
		),
	);
}
