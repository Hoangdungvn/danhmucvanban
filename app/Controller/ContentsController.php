<?php
App::uses('AppController', 'Controller');
/**
 * Tblcontents Controller
 *
 * @property Tblcontent $Tblcontent
 * @property PaginatorComponent $Paginator
 */
class ContentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

    public function beforeFilter(){
        parent::beforeFilter();
        if(isset($this->params['prefix']) && $this->params['prefix'] == 'admin'){
            $this->set('head_title','Quản lý Trang');
        }
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Content->recursive = 0;
		$this->set('tblcontents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Content->exists($id)) {
			throw new NotFoundException(__('Invalid tblcontent'));
		}
		$options = array('conditions' => array('Tblcontent.' . $this->Content->primaryKey => $id));
		$this->set('tblcontent', $this->Content->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Content->create();
			if ($this->Content->save($this->request->data)) {
				$this->Session->setFlash(__('The tblcontent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tblcontent could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Content->exists($id)) {
			throw new NotFoundException(__('Invalid tblcontent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Content->save($this->request->data)) {
				$this->Session->setFlash(__('The tblcontent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tblcontent could not be saved. Please, try again.'));
			}
		} else {
            $options = array('conditions' => array('Tblcontent.' . $this->Content->primaryKey => $id));
            $this->set('tblcontent', $this->Content->find('first', $options));
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Content->id = $id;
		if (!$this->Content->exists()) {
			throw new NotFoundException(__('Invalid tblcontent'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Content->delete()) {
			$this->Session->setFlash(__('The tblcontent has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tblcontent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Content->recursive = 0;
        $this->Paginator->settings = array('limit'=>10);
		$this->set('contents', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Content->exists($id)) {
			throw new NotFoundException(__('Invalid tblcontent'));
		}
		$options = array('conditions' => array('Content.' . $this->Content->primaryKey => $id));
		$this->set('tblcontent', $this->Content->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
            $_data = $this->request->data;
            $_check = $this->Content->find('count',array(
                    'conditions' => array('Content.content_url_key' => $_data['Content']['content_url_key'])
                ));
            if(!$_check){
                $this->Content->create();
                $_data['Content']['content_creatdate'] = date('Y-m-d');
                if ($this->Content->save($_data)) {
                    $this->Session->setFlash(__("Trang '%s' đã tạo thành công",$_data['Content']['content_url_key']),'default',
                        array('class' => 'alert alert-success'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('Có lỗi khi tạo trang. Vui lòng xem lại'),'default',
                        array('class' => 'alert alert-danger'));
                }
            }else{
                $this->Session->setFlash(__("Trang '%s' đã tồn tại. Vui lòng tạo trang mới.",$_data['Content']['content_url_key']),'default',
                    array('class' => 'alert alert-danger'));
            }
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Content->exists($id)) {
			throw new NotFoundException(__('Invalid tblcontent'));
		}

		if ($this->request->is(array('post', 'put'))) {
            $this->Content->id = $id;
            $_data = $this->request->data;
            $_data['Content']['content_modifydate'] = date("Y-m-d");
			if ($this->Content->save($this->request->data)) {
				$this->Session->setFlash(__("Trang %s đã được cập nhật thành công",$_data['Content']['content_url_key']),'default',
                    array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__("Trang %s chưa được cập nhật thành công. Vui lòng xem lại",$_data['Content']['content_url_key']),'default',
                    array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('content.' . $this->Content->primaryKey => $id));
			$this->request->data = $this->Content->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_search() {
        if (!empty($this->data))
        {
            $name = $this->request->data['text_search'];
            $conditions = array("or"=>array("Content.content_name Like " => "%$name%","Content.content_desc Like "=>"%$name%"));
            $result = $this->Content->find('all', array('conditions'=> $conditions));
            $this->set(array('contents'=> $result,"text_search"=>$name));
        }else{
            $this->set(array('contents'=> null,"text_search" => null));
        }

    }

	public function admin_delete($id = null) {
		$this->Content->id = $id;
		if (!$this->Content->exists()) {
			throw new NotFoundException(__('Invalid tblcontent'));
		}
//		$this->request->onlyAllow('post', 'delete');
		if ($this->Content->delete()) {
			$this->Session->setFlash(__('The tblcontent has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tblcontent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
