<?php
App::uses('AppModel', 'Model');
/**
 * UsuarioTelefono Model
 *
 * @property Telefono $Telefono
 * @property Usuario $Usuario
 */
class UsuarioTelefono extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Telefono' => array(
			'className' => 'Telefono',
			'foreignKey' => 'telefono_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
