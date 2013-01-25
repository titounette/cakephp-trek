<?php
App::uses('AppModel', 'Model');
/**
 * Guide Model
 *
 * @property User $User
 * @property Group $Group
 * @property Journey $Journey
 * @property RateGuide $RateGuide
 */
class Guide extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'firstname';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Journey' => array(
			'className' => 'Journey',
			'foreignKey' => 'guide_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'RateGuide' => array(
			'className' => 'RateGuide',
			'foreignKey' => 'guide_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
