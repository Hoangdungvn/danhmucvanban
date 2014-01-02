<?php
App::uses('AppController', 'Controller');
/**
 * Cats Controller
 *
 * @property Cat $Cat
 * @property PaginatorComponent $Paginator
 */
class CatsController extends AppController {

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
		$this->Cat->recursive = 0;
		$this->set('cats', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cat->exists($id)) {
			throw new NotFoundException(__('Invalid cat'));
		}
		$options = array('conditions' => array('Cat.' . $this->Cat->primaryKey => $id));
		$this->set('cat', $this->Cat->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cat->create();
			if ($this->Cat->save($this->request->data)) {
				$this->Session->setFlash(__('The cat has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cat could not be saved. Please, try again.'));
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
		if (!$this->Cat->exists($id)) {
			throw new NotFoundException(__('Invalid cat'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cat->save($this->request->data)) {
				$this->Session->setFlash(__('The cat has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cat could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cat.' . $this->Cat->primaryKey => $id));
			$this->request->data = $this->Cat->find('first', $options);
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
		$this->Cat->id = $id;
		if (!$this->Cat->exists()) {
			throw new NotFoundException(__('Invalid cat'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cat->delete()) {
			$this->Session->setFlash(__('The cat has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cat could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Cat->recursive = 0;
        $this->Paginator->settings = array('limit'=>10);

        $this->set('cats', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Cat->exists($id)) {
			throw new NotFoundException(__('Invalid cat'));
		}
		$options = array('conditions' => array('Cat.' . $this->Cat->primaryKey => $id));
		$this->set('cat', $this->Cat->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Cat->create();
			if ($this->Cat->save($this->request->data)) {
				$this->Session->setFlash(__('Lĩnh vực đã được lưu.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Lĩnh vực chưa lưu được. Xin hãy thử lại.'));
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
		if (!$this->Cat->exists($id)) {
			throw new NotFoundException(__('Invalid cat'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cat->save($this->request->data)) {
				$this->Session->setFlash(__('Lĩnh vực đã được lưu.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Lĩnh vực chưa lưu được. Xin hãy thử lại.'));
			}
		} else {
			$options = array('conditions' => array('Cat.' . $this->Cat->primaryKey => $id));
			$this->request->data = $this->Cat->find('first', $options);
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
		$this->Cat->id = $id;
		if (!$this->Cat->exists()) {
			throw new NotFoundException(__('Invalid cat'));
		}
//		$this->request->onlyAllow('post', 'delete');
		if ($this->Cat->delete()) {
			$this->Session->setFlash(__('Lĩnh vực đã được xóa.'));
		} else {
			$this->Session->setFlash(__('Lĩnh vực chưa được xóa. Xin hãy thử lại.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
