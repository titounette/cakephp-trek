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
		'app.comments_guide',
		'app.comments_journey',
		'app.comments_track',
		'app.guide_submission',
		'app.guide'
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
