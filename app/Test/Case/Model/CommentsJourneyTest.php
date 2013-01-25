<?php
App::uses('CommentsJourney', 'Model');

/**
 * CommentsJourney Test Case
 *
 */
class CommentsJourneyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comments_journey',
		'app.user',
		'app.comments_guide',
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
		$this->CommentsJourney = ClassRegistry::init('CommentsJourney');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommentsJourney);

		parent::tearDown();
	}

}
