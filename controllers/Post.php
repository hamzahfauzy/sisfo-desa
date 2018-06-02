<?php
namespace controllers;

use libs\Controller;

class Post extends Controller
{

	function __construct(){
		parent::__construct();
	}
	
	function actionIndex(){
		$this->view->title = "Post";
		$this->view->render("index",1);
	}


}