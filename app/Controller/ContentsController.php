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
			if ($this->Content->save($this->request->data)) {
				$this->Session->setFlash(__('The tblcontent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tblcontent could not be saved. Please, try again.'));
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
