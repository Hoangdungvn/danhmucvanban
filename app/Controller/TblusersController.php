<?php
/**
 * Created by PhpStorm.
 * User: Sonnv
 * Date: 12/30/13
 * Time: 10:52 AM
 */

class TblusersController extends AppController
{

    public function beforeFilter() {
        parent::beforeFilter();
    }


    //Process request in admin page
    public function admin_login()
    {
        if($this->Session->check('user') && $this->Session->read('user') == 1){
            $this->redirect(array('controller' => 'Tblusers','action'=>'dashboard','admin'=>true));
        }
        if($this->request->is('post')){
            $info_user = $this->request->data;
            $query = $this->Tbluser->findByEmailAndPasswordAndPermissionId($info_user['Tbluser']['email'],$info_user['Tbluser']['password'],2);
            if(count($query)){
                $this->Session->write('users',1);
                $this->redirect(array('controller' => 'tblusers', 'action' => 'dashboard'));
            }else{
                $this->Session->setFlash('User or Password is invalid. Please try again.');
            }
        }
    }

    public function admin_logout(){
        if($this->Session->check('users')){
            $this->Session->delete('users');
            $this->Session->setFlash('You logout success');
        }
        $this->redirect(array('controller' => 'Users', 'action' => 'login'));
    }

    public function admin_dashboard(){

    }
}