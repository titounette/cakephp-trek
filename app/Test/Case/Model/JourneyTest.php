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
		'app.zone',
		'app.guide',
		'app.user',
		'app.group',
		'app.comments_guide',
		'app.comments_journey',
		'app.comments_track',
		'app.guide_submission',
		'app.tourist',
		'app.rate_guide',
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
