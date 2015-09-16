<?php
App::uses('CargoUsuario', 'Model');

/**
 * CargoUsuario Test Case
 *
 */
class CargoUsuarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cargo_usuario',
		'app.cargo',
		'app.usuario',
		'app.usuario_telefono'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CargoUsuario = ClassRegistry::init('CargoUsuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CargoUsuario);

		parent::tearDown();
	}

}
