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
		'app.group',
		'app.guide_submission',
		'app.tourist',
		'app.comments_guide',
		'app.comments_journey',
		'app.comments_track',
		'app.journey',
		'app.zone',
		'app.rate_journey',
		'app.track',
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
