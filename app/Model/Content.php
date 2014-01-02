<?php
App::uses('AppModel', 'Model');
/**
 * Tblcontent Model
 *
 */
class Content extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
    public $useTable = 'tblcontents';
	public $primaryKey = 'content_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'content_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'content_desc' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);
}
