<?php
App::uses('RateTrack', 'Model');

/**
 * RateTrack Test Case
 *
 */
class RateTrackTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rate_track',
		'app.track',
		'app.journey',
		'app.creator',
		'app.zone',
		'app.user',
		'app.comments_guide',
		'app.comments_journey',
		'app.comments_track',
		'app.guide_submission',
		'app.guide',
		'app.tourist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RateTrack = ClassRegistry::init('RateTrack');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RateTrack);

		parent::tearDown();
	}

}
