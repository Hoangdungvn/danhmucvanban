<?php
App::uses('AppController', 'Controller');
/**
 * Doctypes Controller
 *
 * @property Doctype $Doctype
 * @property PaginatorComponent $Paginator
 */
class DoctypesController extends AppController {

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
		$this->Doctype->recursive = 0;
		$this->set('doctypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Doctype->exists($id)) {
			throw new NotFoundException(__('Invalid doctype'));
		}
		$options = array('conditions' => array('Doctype.' . $this->Doctype->primaryKey => $id));
		$this->set('doctype', $this->Doctype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Doctype->create();
			if ($this->Doctype->save($this->request->data)) {
				$this->Session->setFlash(__('Loại văn bản đã được lưu.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Loại văn bản chưa được lưu. Xin hãy thử lại.'));
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
		if (!$this->Doctype->exists($id)) {
			throw new NotFoundException(__('Invalid doctype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Doctype->save($this->request->data)) {
				$this->Session->setFlash(__('Loại văn bản đã được lưu.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Loại văn bản chưa được lưu. Xin hãy thử lại.'));
			}
		} else {
			$options = array('conditions' => array('Doctype.' . $this->Doctype->primaryKey => $id));
			$this->request->data = $this->Doctype->find('first', $options);
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
		$this->Doctype->id = $id;
		if (!$this->Doctype->exists()) {
			throw new NotFoundException(__('Invalid doctype'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Doctype->delete()) {
			$this->Session->setFlash(__('Loại văn bản đã được xóa.'));
		} else {
			$this->Session->setFlash(__('Loại văn bản chưa được xóa. Xin hãy thử lại.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Doctype->recursive = 0;
        $this->Paginator->settings = array('limit'=>10);
		$this->set('doctypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Doctype->exists($id)) {
			throw new NotFoundException(__('Invalid doctype'));
		}
		$options = array('conditions' => array('Doctype.' . $this->Doctype->primaryKey => $id));
		$this->set('doctype', $this->Doctype->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Doctype->create();
			if ($this->Doctype->save($this->request->data)) {
				$this->Session->setFlash(__('Loại văn bản đã được lưu.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Loại văn bản chưa được lưu. Xin hãy thử lại.'));
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
		if (!$this->Doctype->exists($id)) {
			throw new NotFoundException(__('Invalid doctype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Doctype->save($this->request->data)) {
				$this->Session->setFlash(__('The doctype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Doctype.' . $this->Doctype->primaryKey => $id));
			$this->request->data = $this->Doctype->find('first', $options);
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
		$this->Doctype->id = $id;
		if (!$this->Doctype->exists()) {
			throw new NotFoundException(__('Invalid doctype'));
		}
//		$this->request->onlyAllow('post', 'delete');
		if ($this->Doctype->delete()) {
			$this->Session->setFlash(__('The doctype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The doctype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
