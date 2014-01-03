<?php
App::uses('AppController', 'Controller');
/**
 * Tblusers Controller
 *
 * @property Tbluser $Tbluser
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid tbluser'));
		}
		$options = array('conditions' => array('Tbluser.' . $this->User->primaryKey => $id));
		$this->set('tbluser', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The tbluser has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tbluser could not be saved. Please, try again.'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid tbluser'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Thông tin người dùng đã được sửa.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Thông tin người dùng chưa được sửa. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

    public function admin_search() {
        if (!empty($this->data))
        {
            $name = $this->request->data['text_search'];
            $conditions = array("or"=>array("User.user_fullname Like " => "%$name%","User.user_email Like "=>"%$name%"));
            $result = $this->User->find('all', array('conditions'=> $conditions));
            $this->set(array('users'=> $result,"text_search"=>$name));
        }else{
            $this->set(array('users'=> null,"text_search"=>null));
        }

    }

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid tbluser'));
		}
//		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('Người dùng đã được xóa.'));
		} else {
			$this->Session->setFlash(__('Người dùng chưa được xóa. Xin hãy thử lại.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
