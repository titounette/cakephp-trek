<?php
App::uses('RateGuide', 'Model');

/**
 * RateGuide Test Case
 *
 */
class RateGuideTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rate_guide'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RateGuide = ClassRegistry::init('RateGuide');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RateGuide);

		parent::tearDown();
	}

}
