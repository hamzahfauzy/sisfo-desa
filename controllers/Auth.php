<?php
namespace controllers;

use libs\Controller;
use libs\Session;
use models\Users_Model;

class Auth extends Controller
{

	function __construct(){
		parent::__construct();
		Session::init();
	}

	function actionIndex(){
		if(!Session::get("userID")){
			$this->redirect("auth/login");
		}
	}

	function actionLogin(){
		if($this->request("POST")){
			$model = new Users_Model;
			extract($_POST);
			$model->find()->where(["username"=>$username,"password"=>$password])->one();
			if($model->length){
				Session::set("admin",$username);
				$this->redirect("admin");				
			}
		}

		return $this->view->render("login");
	}

	function actionLogout(){
		Session::destroy();
		$this->redirect("auth");
	}


}