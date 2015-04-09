<?php
class PagesController extends Controller{
	
	function view($id){

		$this->loadModel('Page');
		$d['page'] = $this->Page->findFirst(array(
			'conditions' => array('id' => $id, 'type' => 'page', 'online' => 1)
			));
		if(empty($d['page'])){
			$this->e404('Page introuvable');
		}
		$this->set($d);
	}

	function getMenu(){

		$this->loadModel('Page');
		return $this->Page->find(array(
				'conditions' => array('online' => 1, 'type' => 'page')
			));

	}

	/**
	* ADMIN
	**/
	function admin_index(){

		$perPage = 10; 
		$this->loadModel('Page');
		$conditions = array('type' => 'page');
		$d['pages'] = $this->Page->find(array(
				'fields' 		=> 'id,name,online', 
				'conditions' 	=> $conditions,
				'limit' 		=> ($perPage*($this->request->page-1)).', '.$perPage
			));
		$d['total'] = $this->Page->findCount($conditions);
		$d['page'] = ceil($d['total'] / $perPage);
		$this->set($d);

	}


	/**
	* Permet d'éditer un article
	**/
	function admin_edit($id = null){

		$this->loadModel('Page');
		if($id === null) {
			$page = $this->Page->findFirst(array(
				'conditions' => array('online' => -1)
			));
			if(!empty($page)) {
				$id = $page->id;
			} else {
				$this->Page->save(array(
					'online' => -1
				));
				$id = $this->Page->id;
			}
		}
		$d['id'] = $id;
		if($this->request->data){
			if($this->Page->validates($this->request->data)){
				$this->request->data->type = 'page';
				$this->request->data->created = date('Y-m-d h:i:s');
				$this->Page->save($this->request->data);
				$this->Session->setFlash('Le contenu a bien été modifié.');
				$this->redirect('admin/pages/index');
			} else {
				$this->Session->setFlash('Merci de corriger vos informations.', 'danger');
			}
		} else {
			$this->request->data = $this->Page->findFirst(array(
				'conditions' => array('id' => $id)
			));
		}
		$this->set($d);

	}

	/**
	* Permet de supprimer un article
	**/
	function admin_delete($id){

		$this->loadModel('Page');
		$this->Page->delete($id);
		$this->Session->setFlash('Le contenu a bien été supprimé.');
		$this->redirect('admin/pages/index');

	}

} 