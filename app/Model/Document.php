<?php
App::uses('AppModel', 'Model');
/**
 * Document Model
 *
 * @property Doctype $Doctype
 * @property Organ $Organ
 * @property Cat $Cat
 */
class Document extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tbldocuments';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'docment_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'docment_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'This value is required.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
		'document_desc' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'This value is required.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'document_signdate' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'This value is required.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'document_signer' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'This value is required.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'document_status' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'This value is required.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'doctype_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'This value is required.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'organ_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'This value is required.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cat_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'This value is required.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Doctype' => array(
			'className' => 'Doctype',
			'foreignKey' => 'doctype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Organ' => array(
			'className' => 'Organ',
			'foreignKey' => 'organ_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cat' => array(
			'className' => 'Cat',
			'foreignKey' => 'cate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
