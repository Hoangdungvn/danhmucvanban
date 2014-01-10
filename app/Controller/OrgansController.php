<?php
App::uses('AppController', 'Controller');
/**
 * Organs Controller
 *
 * @property Organ $Organ
 * @property PaginatorComponent $Paginator
 */
class OrgansController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $use = array("Organ","Document");
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Organ->recursive = 0;
		$this->set('organs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Organ->exists($id)) {
			throw new NotFoundException(__('Invalid organ'));
		}
		$options = array('conditions' => array('Organ.' . $this->Organ->primaryKey => $id));
		$this->set('organ', $this->Organ->find('first', $options));
	}

    public function list_organs($id = null){
       if (!$this->Organ->exists($id)) {
			throw new NotFoundException(__('Invalid organ'));
		}
       $list = $this->Document->find("all",array(
               'conditions' => array('Document.organ_id' => $id)
           ));
        $this->set('organ', $list);
    }
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Organ->create();
			if ($this->Organ->save($this->request->data)) {
				$this->Session->setFlash(__('The organ has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organ could not be saved. Please, try again.'));
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
		if (!$this->Organ->exists($id)) {
			throw new NotFoundException(__('Invalid organ'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Organ->save($this->request->data)) {
				$this->Session->setFlash(__('The organ has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organ could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Organ.' . $this->Organ->primaryKey => $id));
			$this->request->data = $this->Organ->find('first', $options);
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
		$this->Organ->id = $id;
		if (!$this->Organ->exists()) {
			throw new NotFoundException(__('Invalid organ'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Organ->delete()) {
			$this->Session->setFlash(__('The organ has been deleted.'));
		} else {
			$this->Session->setFlash(__('The organ could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Organ->recursive = 0;
        $this->Paginator->settings = array('limit'=>10);
		$this->set('organs', $this->Paginator->paginate());
	}

    public function admin_search() {
        if (!empty($this->data))
        {
            $name = $this->request->data['text_search'];
             $conditions = array("or"=>array("Organ.organ_name Like " => "%$name%","Organ.organ_desc Like "=>"%$name%"));
            $result = $this->Organ->find('all', array('conditions'=> $conditions));
            $this->set(array('organs'=> $result,"text_search"=>$name));
        }else{
            $this->set(array('organs'=> null,"text_search"=>null));
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
		if (!$this->Organ->exists($id)) {
			throw new NotFoundException(__('Invalid organ'));
		}
		$options = array('conditions' => array('Organ.' . $this->Organ->primaryKey => $id));
		$this->set('organ', $this->Organ->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Organ->create();
			if ($this->Organ->save($this->request->data)) {
				$this->Session->setFlash(__('Cơ quan đã được lưu.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Cơ quan chưa được lưu. Xin hãy thử lại'));
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
		if (!$this->Organ->exists($id)) {
			throw new NotFoundException(__('Invalid organ'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Organ->save($this->request->data)) {
				$this->Session->setFlash(__('Cơ quan đã được lưu.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Cơ quan chưa được lưu. Xin hãy thử lại'));
			}
		} else {
			$options = array('conditions' => array('Organ.' . $this->Organ->primaryKey => $id));
			$this->request->data = $this->Organ->find('first', $options);
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
		$this->Organ->id = $id;
		if (!$this->Organ->exists()) {
			throw new NotFoundException(__('Invalid organ'));
		}
//		$this->request->onlyAllow('post', 'delete');
		if ($this->Organ->delete()) {
			$this->Session->setFlash(__('Cơ quan đã được xóa.'));
		} else {
			$this->Session->setFlash(__('Cơ quan chưa được xóa. Xin hãy thử lại.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
