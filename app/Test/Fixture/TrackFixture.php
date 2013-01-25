<?php
/**
 * TrackFixture
 *
 */
class TrackFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'journey_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'long' => array('type' => 'integer', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'size' => array('type' => 'integer', 'null' => true, 'default' => null),
		'level' => array('type' => 'integer', 'null' => true, 'default' => null),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'journey_id' => 1,
			'long' => 1,
			'user_id' => 1,
			'size' => 1,
			'level' => 1,
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
