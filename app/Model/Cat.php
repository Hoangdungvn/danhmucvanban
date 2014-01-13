<?php
App::uses('AppModel', 'Model');
/**
 * Cat Model
 *
 */
class Cat extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tblcates';


    /**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'cate_id';

/**
 * Validation rules
 *
 * @var array
 */
//	public $validate = array(
//		'cat_name' => array(
//			'notEmpty' => array(
//				'rule' => array('notEmpty'),
//				//'message' => 'Your custom message here',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
//		'cat_desc' => array(
//			'notEmpty' => array(
//				'rule' => array('notEmpty'),
//				//'message' => 'Your custom message here',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
//		'cat_status' => array(
//			'notEmpty' => array(
//				'rule' => array('notEmpty'),
//				//'message' => 'Your custom message here',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
//	);

    /*
     * Get All Category
     * */
    public function _getAllCate(){
        $_cateArr = array();
        $_cates = $this->find('all',array(
            'conditions' => array(
                'cate_status' => 1
            )
        ));
        foreach($_cates as $_cate){
            $_cateArr[] = $_cate['Cat'];
        }
        return $_cateArr;
    }

    function _recursive($arrData, $parent = 0, $level = 0, &$result) {
        if (count($arrData) > 0) {
            foreach ($arrData as $key => $val) {
                if ($parent == $val['parent_id']) {
                    $val['level'] = $level;
                    $result[] = $val;
                    $_parent = $val['cate_id'];
                    unset($arrData[$key]);
                    $this->_recursive($arrData, $_parent, $level + 1, $result);
                }
            }
        }
    }

    public function _getTreeCate()
    {
        $_cateArr = $this->_getAllCate();
        $this->_recursive($_cateArr, 0, 0, $result);
        return $result;
    }

}
