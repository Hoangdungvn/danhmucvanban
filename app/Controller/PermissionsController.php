<?php
App::uses('AppController', 'Controller');
/**
 * Tblpermissions Controller
 *
 * @property Tblpermission $Tblpermission
 * @property PaginatorComponent $Paginator
 */
class PermissionsController extends AppController {

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
		$this->Permission->recursive = 0;
		$this->set('permissions', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Permission->exists($id)) {
			throw new NotFoundException(__('Invalid tblpermission'));
		}
		$options = array('conditions' => array('Tblpermission.' . $this->Tblpermission->primaryKey => $id));
		$this->set('tblpermission', $this->Tblpermission->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
            $perm = $this->request->data["permission_view"].",".$this->request->data["permission_add"].",".$this->request->data["permission_update"].",".$this->request->data["permission_delete"];
            $data = array(
                'user_id' => $this->request->data["userid"],
                'module_id' => $this->request->data["moduleid"],
                "permission_number"=>$perm
            );
            $result = $this->Permission->save($data);
			if ($result) {
				$this->Session->setFlash(__('The tblpermission has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tblpermission could not be saved. Please, try again.'));
			}
		}
		$users = $this->Permission->User->find('all');
		$modules = $this->Permission->Module->find('all');
		$this->set(compact('permissions', 'users', 'modules'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Tblpermission->exists($id)) {
			throw new NotFoundException(__('Invalid tblpermission'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tblpermission->save($this->request->data)) {
				$this->Session->setFlash(__('The tblpermission has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tblpermission could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tblpermission.' . $this->Tblpermission->primaryKey => $id));
			$this->request->data = $this->Tblpermission->find('first', $options);
		}
		$permissions = $this->Tblpermission->Permission->find('list');
		$users = $this->Tblpermission->User->find('list');
		$modules = $this->Tblpermission->Module->find('list');
		$this->set(compact('permissions', 'users', 'modules'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Tblpermission->id = $id;
		if (!$this->Tblpermission->exists()) {
			throw new NotFoundException(__('Invalid tblpermission'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tblpermission->delete()) {
			$this->Session->setFlash(__('The tblpermission has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tblpermission could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
