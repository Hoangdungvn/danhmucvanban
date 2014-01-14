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
	public $components = array('Paginator','Security');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

    public function beforeFilter(){
        parent::beforeFilter();
        if(isset($this->params['prefix']) && $this->params['prefix'] == 'admin'){
            $this->set('head_title','Quản lý người dùng');
        }
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
            $result = $this->User->save(array(
                "user_fullname" => $this->request->data['User']['user_fullname'],
                "user_email"    => $this->request->data['User']['user_email'],
                "user_password" => $md5 = Security::hash($this->request->data['User']['user_password'], 'md5', 'my-salt'),
                "user_status"   => $this->request->data['User']['user_status']
            ));
			if ($result) {
                $this->Session->setFlash(__('Thông tin người dùng đã được thêm.'),'default',
                    array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
                $this->Session->setFlash(__('Thông tin gười dùng chưa được thêm. Xin hãy xem lại.'),'default',
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid tbluser'));
		}
		if ($this->request->is(array('post', 'put'))) {
            $this->request->data['User']['user_password'] = Security::hash($this->request->data['User']['user_password'], 'md5', 'my-salt');
			if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Thông tin người dùng đã được sửa.'),'default',
                    array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
                $this->Session->setFlash(__('Thông tin người dùng chưa được sửa. Xin hãy xem lại.'),'default',
                    array('class' => 'alert alert-danger'));
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
            $this->Session->setFlash(__('Người dùng đã được xóa.'),'default',
                array('class' => 'alert alert-success'));
		} else {
            $this->Session->setFlash(__('Người dùng chưa được xóa. Xin hãy thử lại.'),'default',
                array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function admin_login() {
        if($this->request->is('post')){
            $_dataInfo = $this->request->data;
            $_query = $this->User->find('first',array(
                'conditions' => array(
                    'User.user_email' => $_dataInfo['User']['user_email'],
                    'User.user_password' => $_dataInfo['User']['user_password'],
                    'User.user_status' => 1
                )
            ));
            var_dump($_query);die();
        }
    }
}
