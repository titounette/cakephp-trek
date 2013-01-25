<?php
App::uses('RolesController', 'Controller');

/**
 * RolesController Test Case
 *
 */
class RolesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.role',
		'app.user',
		'app.guide',
		'app.journey',
		'app.zone',
		'app.rate_journey',
		'app.track',
		'app.tourist'
	);

}
