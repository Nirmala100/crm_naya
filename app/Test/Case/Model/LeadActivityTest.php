<?php
App::uses('LeadActivity', 'Model');

/**
 * LeadActivity Test Case
 *
 */
class LeadActivityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lead_activity',
		'app.user',
		'app.category',
		'app.lead_contact',
		'app.contact_manager'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LeadActivity = ClassRegistry::init('LeadActivity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LeadActivity);

		parent::tearDown();
	}

}
