<?php
App::uses('ContactManager', 'Model');

/**
 * ContactManager Test Case
 *
 */
class ContactManagerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contact_manager',
		'app.lead_contact'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContactManager = ClassRegistry::init('ContactManager');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContactManager);

		parent::tearDown();
	}

}
