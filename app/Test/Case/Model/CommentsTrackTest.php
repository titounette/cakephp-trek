<?php
App::uses('CommentsTrack', 'Model');

/**
 * CommentsTrack Test Case
 *
 */
class CommentsTrackTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comments_track',
		'app.user',
		'app.comments_guide',
		'app.comments_journey',
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
		$this->CommentsTrack = ClassRegistry::init('CommentsTrack');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommentsTrack);

		parent::tearDown();
	}

}
