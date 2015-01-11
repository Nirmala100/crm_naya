<?php
App::uses('LeadContact', 'Model');

/**
 * LeadContact Test Case
 *
 */
class LeadContactTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lead_contact',
		'app.contact_manager',
		'app.user',
		'app.category',
		'app.lead_activity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LeadContact = ClassRegistry::init('LeadContact');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LeadContact);

		parent::tearDown();
	}

}
