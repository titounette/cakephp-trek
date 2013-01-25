<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.group',
		'app.comments_guide',
		'app.comments_journey',
		'app.comments_track',
		'app.guide_submission',
		'app.guide',
		'app.journey',
		'app.zone',
		'app.rate_journey',
		'app.tourist',
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
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
