<?php
namespace controllers;
use libs\Controller;
use models\Product_Model;
use models\Picture_Model;

class Index extends Controller {

	function __construct(){
		parent::__construct();
	}

	function actionIndex(){
		$this->view->title = "Index";
		return $this->view->render("index",1);
	}
	

}