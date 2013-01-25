<?php
App::uses('RateJourney', 'Model');

/**
 * RateJourney Test Case
 *
 */
class RateJourneyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rate_journey'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RateJourney = ClassRegistry::init('RateJourney');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RateJourney);

		parent::tearDown();
	}

}
