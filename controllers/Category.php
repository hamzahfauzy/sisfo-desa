<?php
namespace controllers;

use libs\Controller;

class Category extends Controller
{

	function __construct(){
		parent::__construct();
	}
	
	function actionIndex(){
		$this->view->title = "Category";
		$this->view->render("index",1);
	}


}