<?php

class PostsController extends AppController {
	
	var $name="Posts";
	
	function index() {
		$q = $this->Post->find('all',array(
		'fields'=> array('titre','contenu')
		));
		$this->set('articles',$q);
	}
}

?>