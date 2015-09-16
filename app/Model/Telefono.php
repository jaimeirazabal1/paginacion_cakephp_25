<?php
App::uses('AppModel', 'Model');
/**
 * Telefono Model
 *
 * @property UsuarioTelefono $UsuarioTelefono
 */
class Telefono extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descripcion';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'UsuarioTelefono' => array(
			'className' => 'UsuarioTelefono',
			'foreignKey' => 'telefono_id',
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
