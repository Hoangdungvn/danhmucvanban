<?php
App::uses('AppController', 'Controller');
/**
 * modules Controller
 *
 * @property module $module
 * @property PaginatorComponent $Paginator
 */
class ModulesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Module->recursive = 0;
		$this->set('modules', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Module->exists($id)) {
			throw new NotFoundException(__('Invalid module'));
		}
		$options = array('conditions' => array('module.' . $this->Module->primaryKey => $id));
		$this->set('module', $this->Module->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Module->create();
			if ($this->Module->save($this->request->data)) {
				$this->Session->setFlash(__('The module has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module could not be saved. Please, try again.'));
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
		if (!$this->Module->exists($id)) {
			throw new NotFoundException(__('Invalid module'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Module->save($this->request->data)) {
				$this->Session->setFlash(__('The module has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('module.' . $this->Module->primaryKey => $id));
			$this->request->data = $this->Module->find('first', $options);
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
		$this->Module->id = $id;
		if (!$this->Module->exists()) {
			throw new NotFoundException(__('Invalid module'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Module->delete()) {
			$this->Session->setFlash(__('The module has been deleted.'));
		} else {
			$this->Session->setFlash(__('The module could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Module->recursive = 0;
        $this->Paginator->settings = array('limit'=>10);
		$this->set('modules', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Module->exists($id)) {
			throw new NotFoundException(__('Invalid module'));
		}
		$options = array('conditions' => array('module.' . $this->Module->primaryKey => $id));
		$this->set('module', $this->Module->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Module->create();
			if ($this->Module->save($this->request->data)) {
				$this->Session->setFlash(__('Module đã được lưu.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Module đã chưa được lưu. Xin hãy thử lại.'));
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
		if (!$this->Module->exists($id)) {
			throw new NotFoundException(__('Invalid module'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Module->save($this->request->data)) {
				$this->Session->setFlash(__('Module đã được lưu.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Module đã chưa được lưu. Xin hãy thử lại.'));
			}
		} else {
			$options = array('conditions' => array('module.' . $this->Module->primaryKey => $id));
			$this->request->data = $this->Module->find('first', $options);
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
		$this->Module->id = $id;
		if (!$this->Module->exists()) {
			throw new NotFoundException(__('Invalid module'));
		}
//		$this->request->onlyAllow('post', 'delete');
		if ($this->Module->delete()) {
			$this->Session->setFlash(__('Module đã được xóa.'));
		} else {
			$this->Session->setFlash(__('Module đã chưa được xóa. Xin hãy thử lại.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
