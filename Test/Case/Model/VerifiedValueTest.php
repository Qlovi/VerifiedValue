<?php
App::uses('VerifiedValue', 'VerifiedValue.Model');

/**
 * VerifiedValue Test Case
 *
 */
class VerifiedValueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.verified_value.verified_value',
		'plugin.verified_value.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VerifiedValue = ClassRegistry::init('VerifiedValue.VerifiedValue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VerifiedValue);

		parent::tearDown();
	}

}
