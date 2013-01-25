<?php
App::uses('CommentsGuide', 'Model');

/**
 * CommentsGuide Test Case
 *
 */
class CommentsGuideTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comments_guide',
		'app.user',
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
		$this->CommentsGuide = ClassRegistry::init('CommentsGuide');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommentsGuide);

		parent::tearDown();
	}

}
