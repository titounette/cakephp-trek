<?php
/**
 * JourneyFixture
 *
 */
class JourneyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'creation' => array('type' => 'date', 'null' => true, 'default' => null),
		'max' => array('type' => 'integer', 'null' => true, 'default' => null),
		'creator_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'zone_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'creation' => '2013-01-25',
			'max' => 1,
			'creator_id' => 1,
			'zone_id' => 1
		),
	);

}
