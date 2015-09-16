<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property UsuarioTelefono $UsuarioTelefono
 */
class Usuario extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'usuario';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'UsuarioTelefono' => array(
			'className' => 'UsuarioTelefono',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'CargoUsuario' => array(
			'className' => 'CargoUsuario',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
}
