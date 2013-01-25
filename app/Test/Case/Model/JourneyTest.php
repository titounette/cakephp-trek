<?php
App::uses('Journey', 'Model');

/**
 * Journey Test Case
 *
 */
class JourneyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.journey',
		'app.creator',
		'app.zone',
		'app.track'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Journey = ClassRegistry::init('Journey');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Journey);

		parent::tearDown();
	}

}
