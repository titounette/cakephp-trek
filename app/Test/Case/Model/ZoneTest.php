<?php
App::uses('Zone', 'Model');

/**
 * Zone Test Case
 *
 */
class ZoneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.zone',
		'app.journey',
		'app.user',
		'app.guide',
		'app.tourist',
		'app.rate_journey',
		'app.track'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Zone = ClassRegistry::init('Zone');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Zone);

		parent::tearDown();
	}

}
