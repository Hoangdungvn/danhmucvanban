<?php
App::uses('AppController', 'Controller');
/**
 * Documents Controller
 *
 * @property Document $Document
 * @property PaginatorComponent $Paginator
 */
class DocumentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $use = array("Document","Organ","Cat","Doctype");
	public $components = array('Paginator');

    public function beforeFilter(){
        parent::beforeFilter();
        if(isset($this->params['prefix']) && $this->params['prefix'] == 'admin'){
            $this->set('head_title','Quản lý văn bản');
        }
    }
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Document->recursive = 0;
		$this->set('documents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
		$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
        $view = $this->Document->find('first', $options);
        $nexus = null;
        if(isset($this->request['url']['organ'])){
            $nexus_id = $this->request['url']['organ'];
            $nexus = $this->Document->find("all",array(
                'conditions' => array('Document.organ_id' => $nexus_id,"NOT"=>array("Document.docment_id"=>$id)),
                'order' => array('Document.docment_created DESC'),
                'limit' => 10
            ));
        }
        if(isset($this->request['url']['doctype'])){
            $nexus_id = $this->request['url']['doctype'];
            $nexus = $this->Document->find("all",array(
                'conditions' => array('Document.doctype_id' => $nexus_id,"NOT"=>array("Document.docment_id"=>$id)),
                'order' => array('Document.docment_created DESC'),
                'limit' => 10
            ));
        }
        if(isset($this->request['url']['cat'])){
            $nexus_id = $this->request['url']['cat'];
            $nexus = $this->Document->find("all",array(
                'conditions' => array('Document.cat_id' => $nexus_id,"NOT"=>array("Document.docment_id"=>$id)),
                'order' => array('Document.docment_created DESC'),
                'limit' => 10
            ));
        }

		$this->set(array(
            'document'=>$this->Document->find('first', $options),
            "nexus" =>$nexus
        ));
	}

    /*
    * Get List Document By CatId
    * */
    public function list_document()
    {
        $cat_id = $this->request->query('cate_id');

        $this->Paginator->settings = array(
            'conditions' => array(
                'Document.cate_id' => $cat_id,
                'Document.document_status' => 1
            ),
            'order' => array('Document.document_signdate DESC'),
            'limit' => 1
        );
        $this->set('documents', $this->Paginator->paginate());
    }




/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Document->create();
			if ($this->Document->save($this->request->data)) {
				$this->Session->setFlash(__('The document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'));
			}
		}
		$doctypes = $this->Document->Doctype->find('list');
		$organs = $this->Document->Organ->find('list');
		$cats = $this->Document->Cat->find('list');
		$this->set(compact('doctypes', 'organs', 'cats'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Document->save($this->request->data)) {
				$this->Session->setFlash(__('The document has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
			$this->request->data = $this->Document->find('first', $options);
		}
		$doctypes = $this->Document->Doctype->find('list');
		$organs = $this->Document->Organ->find('list');
		$cats = $this->Document->Cat->find('list');
		$this->set(compact('doctypes', 'organs', 'cats'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Document->id = $id;
		if (!$this->Document->exists()) {
			throw new NotFoundException(__('Invalid document'));
		}
//		$this->request->onlyAllow('post', 'delete');
		if ($this->Document->delete()) {
			$this->Session->setFlash(__('The document has been deleted.'));
		} else {
			$this->Session->setFlash(__('The document could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Document->recursive = 0;

        $this->set('documents', $this->Paginator->paginate());
	}

    public function admin_search() {
        if (!empty($this->data))
        {
            $name = $this->request->data['text_search'];

            $this->Paginator->settings = array(
                'conditions' => array("or"=>array(
                    "Document.docment_name Like " => "%$name%",
                    "Document.document_desc Like "=>"%$name%",
                    "Document.document_signer Like"=>"%$name%",
                    "Document.document_symbol Like"=>"%$name%"
                ))
            );

            $this->set('documents', $this->Paginator->paginate());
            $this->set("text_search", $name);
        }else{
            $this->set(array('documents'=> null,"text_search" => null));
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
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
        $this->Document->id = $id;
		$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
        $_document = $this->Document->find('first', $options);
        $this->set('document',$_document);
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {

            //begin upload file
            $fileupload = $this->_uploadFiles('documents', $this->request->data['Document']['file_upload']);
            if(array_key_exists('urls', $fileupload)) {
                // save the url in the form data
                $this->request->data['Document']['document_file'] = $fileupload['urls'][0];
            }

            //end upload file

            $_data = $this->request->data;


            //Set create at for document
            $_data['Document']['docment_created'] = date('Y-m-d');

			if ($this->Document->save($_data)) {
				$this->Session->setFlash(__('The document has been saved.'),'default',
                    array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'),'default',
                    array('class' => 'alert alert-danger'));
			}
		}
		$doctypes = $this->Document->Doctype->find('list',array(
            'fields' => array('Doctype.doctype_id','Doctype.doctype_name'),
            'conditions' => array('Doctype.doctype_status',1)
        ));
		$organs = $this->Document->Organ->find('list',array(
            'fields' => array('Organ.organ_id','Organ.organ_name'),
            'conditions' => array('Organ.organ_status',1)
        ));
		$cats = $this->Document->Cat->_getTreeCate();
		$this->set(compact('doctypes', 'organs', 'cats'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
        $this->Document->id = $id;
		if ($this->request->is(array('post', 'put'))) {

            //begin upload file
            if($this->request->data['Document']['file_upload']['name']){
                $fileupload = $this->_uploadFiles('documents', $this->request->data['Document']['file_upload']);

            }
            if(array_key_exists('urls', $fileupload)) {
                // save the url in the form data
                $this->request->data['Document']['document_file'] = $fileupload['urls'][0];
            }

            //end upload file
			if ($this->Document->save($this->request->data)) {
				$this->Session->setFlash(__('The document has been saved.'),'default',
                    array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'),'default',
                    array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
			$this->request->data = $this->Document->find('first', $options);
		}
		$doctypes = $this->Document->Doctype->find('list',array(
            'fields' => array('Doctype.doctype_id','Doctype.doctype_name'),
            'conditions' => array('Doctype.doctype_status',1)
        ));
		$organs = $this->Document->Organ->find('list',array(
            'fields' => array('Organ.organ_id','Organ.organ_name'),
            'conditions' => array('Organ.organ_status',1)
        ));
		$cats = $this->Document->Cat->_getTreeCate();
		$this->set(compact('doctypes', 'organs','cats'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Document->id = $id;
		if (!$this->Document->exists()) {
			throw new NotFoundException(__('Invalid document'));
		}
//		$this->request->onlyAllow('post', 'delete');
		if ($this->Document->delete()) {
            $this->Session->setFlash(__('The document has been saved.'),'default',
                array('class' => 'alert alert-success'));
			$this->Session->setFlash(__('The document has been deleted.'),'default',
                array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The document could not be deleted. Please, try again.'),'default',
                array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
