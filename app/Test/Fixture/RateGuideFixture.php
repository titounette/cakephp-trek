<?php
/**
 * RateGuideFixture
 *
 */
class RateGuideFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'rate_guide';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'rate' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'guide_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'rate' => 1,
			'guide_id' => 1
		),
	);

}
