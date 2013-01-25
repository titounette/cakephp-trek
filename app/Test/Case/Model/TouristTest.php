<?php
App::uses('Tourist', 'Model');

/**
 * Tourist Test Case
 *
 */
class TouristTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tourist',
		'app.user',
		'app.group',
		'app.guide_submission',
		'app.guide',
		'app.journey',
		'app.zone',
		'app.rate_journey',
		'app.track',
		'app.rate_guide',
		'app.comments_guide',
		'app.comments_journey',
		'app.comments_track'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tourist = ClassRegistry::init('Tourist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tourist);

		parent::tearDown();
	}

}
