<?php
App::uses('AppController', 'Controller');
/**
 * Tblcats Controller
 *
 * @property Tblcat $Tblcat
 * @property PaginatorComponent $Paginator
 * @property nComponent $n
 */
class TblcatsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Text', 'Js', 'Time');

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
		$this->Tblcat->recursive = 0;
		$this->set('tblcats', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tblcat->exists($id)) {
			throw new NotFoundException(__('Invalid tblcat'));
		}
		$options = array('conditions' => array('Tblcat.' . $this->Tblcat->primaryKey => $id));
		$this->set('tblcat', $this->Tblcat->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tblcat->create();
			if ($this->Tblcat->save($this->request->data)) {
				$this->Session->setFlash(__('The tblcat has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tblcat could not be saved. Please, try again.'));
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
		if (!$this->Tblcat->exists($id)) {
			throw new NotFoundException(__('Invalid tblcat'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tblcat->save($this->request->data)) {
				$this->Session->setFlash(__('The tblcat has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tblcat could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tblcat.' . $this->Tblcat->primaryKey => $id));
			$this->request->data = $this->Tblcat->find('first', $options);
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
		$this->Tblcat->id = $id;
		if (!$this->Tblcat->exists()) {
			throw new NotFoundException(__('Invalid tblcat'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tblcat->delete()) {
			$this->Session->setFlash(__('The tblcat has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tblcat could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Tblcat->recursive = 0;
		$this->set('tblcats', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Tblcat->exists($id)) {
			throw new NotFoundException(__('Invalid tblcat'));
		}
		$options = array('conditions' => array('Tblcat.' . $this->Tblcat->primaryKey => $id));
		$this->set('tblcat', $this->Tblcat->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tblcat->create();
			if ($this->Tblcat->save($this->request->data)) {
				$this->Session->setFlash(__('The tblcat has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tblcat could not be saved. Please, try again.'));
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
		if (!$this->Tblcat->exists($id)) {
			throw new NotFoundException(__('Invalid tblcat'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tblcat->save($this->request->data)) {
				$this->Session->setFlash(__('The tblcat has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tblcat could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tblcat.' . $this->Tblcat->primaryKey => $id));
			$this->request->data = $this->Tblcat->find('first', $options);
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
		$this->Tblcat->id = $id;
		if (!$this->Tblcat->exists()) {
			throw new NotFoundException(__('Invalid tblcat'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tblcat->delete()) {
			$this->Session->setFlash(__('The tblcat has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tblcat could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
