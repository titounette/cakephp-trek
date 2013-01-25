<?php
App::uses('AppModel', 'Model');
/**
 * RateGuide Model
 *
 */
class RateGuide extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'rate_guide';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'rate';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'rate' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
