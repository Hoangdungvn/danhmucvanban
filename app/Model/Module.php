<?php
App::uses('AppModel', 'Model');
/**
 * Tblmodule Model
 *
 */
class Module extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
    public $useTable = 'tblmodules';
	public $primaryKey = 'module_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'module_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'module_desc' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
