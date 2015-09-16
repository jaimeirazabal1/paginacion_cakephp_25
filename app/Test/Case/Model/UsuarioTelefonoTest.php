<?php
App::uses('UsuarioTelefono', 'Model');

/**
 * UsuarioTelefono Test Case
 *
 */
class UsuarioTelefonoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usuario_telefono',
		'app.telefono',
		'app.usuario',
		'app.cargo_usuario',
		'app.cargo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsuarioTelefono = ClassRegistry::init('UsuarioTelefono');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsuarioTelefono);

		parent::tearDown();
	}

}
