<?php
class CalendarController extends Controller{


	function index(){

		$perPage = 5; 
		$this->loadModel('Calendar');
		$id = $this->Calendar->id;
		$conditions = array('online' => 1);
		$d['calendar'] = $this->Calendar->find(array(
			'conditions' => $conditions,
				'limit' => ($perPage*($this->request->page-1)).', '.$perPage
			));
		$d['total'] = $this->Calendar->findCount($conditions);
		$d['page'] = ceil($d['total'] / $perPage);
		$this->set($d);
	}
	
	function view($id){

		$this->loadModel('Calendar');
		$d['calendar'] = $this->Calendar->findFirst(array(
			'fields' 		=> 'id,content,title',
			'conditions' 	=> array('id' => $id, 'online' => 1)
			));
		if(empty($d['calendar'])){
			$this->e404('Page introuvable');
		}
		$this->set($d);
	}

	/**
	* ADMIN
	**/
	function admin_index(){

		$perPage = 10; 
		$this->loadModel('Calendar');
		$id = $this->Calendar->id;
		$d['calendars'] = $this->Calendar->find(array(
				'fields' 		=> 'id,title,online', 
				'limit' 		=> ($perPage*($this->request->page-1)).', '.$perPage
			));
		$d['total'] = $this->Calendar->findCount($id);
		$d['page'] = ceil($d['total'] / $perPage);
		$this->set($d);

	}


	/**
	* Permet d'éditer un article
	**/
	function admin_edit($id = null){

		$this->loadModel('Calendar');
		if($id === null) {
			$calendar = $this->Calendar->findFirst(array(
				'conditions' => array('online' => -1)
			));
			if(!empty($calendar)) {
				$id = $calendar->id;
			} else {
				$this->Calendar->save(array(
					'online' => -1
				));
				$id = $this->Calendar->id;
			}
		}
		$d['id'] = $id;
		if($this->request->data){
			if($this->Calendar->validates($this->request->data)){
				$this->Calendar->save($this->request->data);
				$this->Session->setFlash('Le contenu a bien été modifié.');
				$this->redirect('admin/calendar/index');
			} else {
				$this->Session->setFlash('Merci de corriger vos informations.', 'danger');
			}
		} else {
			$this->request->data = $this->Calendar->findFirst(array(
				'conditions' => array('id' => $id)
			));
		}
		$this->set($d);

	}

	/**
	* Permet de supprimer un article
	**/
	function admin_delete($id){

		$this->loadModel('Calendar');
		$this->Calendar->delete($id);
		$this->Session->setFlash('Le contenu a bien été supprimé.');
		$this->redirect('admin/calendar/index');

	}

} 