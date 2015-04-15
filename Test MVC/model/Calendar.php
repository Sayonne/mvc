<?php 
class Calendar extends Model{
 	
 	var $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'Vous devez préciser un titre.')
	);

}