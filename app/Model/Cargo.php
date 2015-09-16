<?php
App::uses('AppModel', 'Model');
/**
 * Cargo Model
 *
 * @property CargoUsuario $CargoUsuario
 */
class Cargo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'cargo';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CargoUsuario' => array(
			'className' => 'CargoUsuario',
			'foreignKey' => 'cargo_id',
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
