<?php
App::uses('GuideSubmission', 'Model');

/**
 * GuideSubmission Test Case
 *
 */
class GuideSubmissionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guide_submission',
		'app.user',
		'app.comments_guide',
		'app.comments_journey',
		'app.comments_track',
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
		$this->GuideSubmission = ClassRegistry::init('GuideSubmission');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GuideSubmission);

		parent::tearDown();
	}

}
