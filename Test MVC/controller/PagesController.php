<?php
class PagesController extends Controller{
	
	function view($id){

		$this->loadModel('Post');
		$d['page'] = $this->Post->findFirst(array(
			'conditions' => array('id' => $id, 'type' => 'page', 'online' => 1)
			));
		if(empty($d['page'])){
			$this->e404('Page introuvable');
		}
		$this->set($d);
	}

	function getMenu(){

		$this->loadModel('Post');
		return $this->Post->find(array(
				'conditions' => array('online' => 1, 'type' => 'page')
			));

	}

} 