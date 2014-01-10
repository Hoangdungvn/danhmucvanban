<?php
App::uses('AppController', 'Controller');
/**
 * Permissions Controller
 *
 * @property Permission $Permission
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
			throw new NotFoundException(__('Invalid Permission'));
		}
		$options = array('conditions' => array('Permission.' . $this->Permission->primaryKey => $id));
		$this->set('Permission', $this->Permission->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
        $users = $this->Permission->User->find('all');
        $modules = $this->Permission->Module->find('all');
		if ($this->request->is('post')) {
            foreach($modules as $module){
                $module_id = $module['Module']['module_id'];
                $delete = "";
                $view = "";
                $add = "";
                $update = "";
                if(isset($this->request->data["permission_view_$module_id"])){
                    $view = $this->request->data["permission_view_$module_id"];
                }
                if(isset($this->request->data["permission_add_$module_id"])){
                    $add = $this->request->data["permission_add_$module_id"];
                }
                if(isset($this->request->data["permission_update_$module_id"])){
                    $update = $this->request->data["permission_update_$module_id"];
                }
                if(isset($this->request->data["permission_delete_$module_id"])){
                    $delete = $this->request->data["permission_delete_$module_id"];
                }
                $perm = $view.",".$add.",".$update.",".$delete;
                $user_id = $this->request->data["userid"];
                $module = $this->request->data["moduleid_$module_id"];
                $result = $this->Permission->query("INSERT INTO tblpermissions (user_id,module_id,permission_number) VALUE ('".$user_id."' , '".$module."', '".$perm."')");

            }
		}
		$this->set(compact('users', 'modules'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Permission->exists($id)) {
			throw new NotFoundException(__('Invalid Permission'));
		}
        if ($this->request->is('post')) {
            $perm = $this->request->data["permission_view"].",".$this->request->data["permission_add"].",".$this->request->data["permission_update"].",".$this->request->data["permission_delete"];
            $data = array(
                'user_id' => $this->request->data["userid"],
                'module_id' => $this->request->data["moduleid"],
                "permission_number"=>$perm
            );
            $this->Permission->id = $id;
            $result = $this->Permission->save($data);
            if ($result) {
                $this->Session->setFlash(__('Quyền hạn đã được sửa'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Quyền hạn chưa sửa được.Xin hãy thử lại.'));
            }
        }
        $permissions = $this->Permission->Find("first",array('conditions' => array('Permission.' . $this->Permission->primaryKey => $id)));
        $users = $this->Permission->User->find('all');
        $modules = $this->Permission->Module->find('all');
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
		$this->Permission->id = $id;
		if (!$this->Permission->exists()) {
			throw new NotFoundException(__('Invalid Permission'));
		}
		if ($this->Permission->delete()) {
			$this->Session->setFlash(__('Quyền hạn đã được xóa'));
		} else {
			$this->Session->setFlash(__('Quyền hạn chưa xóa được. Xin hãy thử lại.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
