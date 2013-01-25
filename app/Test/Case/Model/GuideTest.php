<?php
App::uses('Guide', 'Model');

/**
 * Guide Test Case
 *
 */
class GuideTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guide',
		'app.user',
		'app.guide_submission',
		'app.tourist',
		'app.group',
		'app.journey',
		'app.rate_journey',
		'app.track',
		'app.rate_track',
		'app.rate_guide'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Guide = ClassRegistry::init('Guide');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Guide);

		parent::tearDown();
	}

}
