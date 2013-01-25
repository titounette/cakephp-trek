<?php
App::uses('AppModel', 'Model');
/**
 * RateGuide Model
 *
 * @property Guide $Guide
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Guide' => array(
			'className' => 'Guide',
			'foreignKey' => 'guide_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
