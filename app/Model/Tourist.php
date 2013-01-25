<?php
App::uses('AppModel', 'Model');
/**
 * Tourist Model
 *
 * @property User $User
 * @property Group $Group
 */
class Tourist extends AppModel {

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
}
