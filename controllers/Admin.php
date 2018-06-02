<?php 
namespace controllers;

use libs\Controller;
use libs\Session;
use models\Berita_Model;

use controllers\admin\Berita as Berita;
use controllers\admin\Category as Category;

class Admin extends Controller {
	function __construct(){
		parent::__construct();
		Session::init();
		if(!Session::get("admin")){
			$this->redirect("auth");
		}
		$this->view->title = "Administration Panel";
		$this->view->layouts = "admin-layouts";
	}

	function actionIndex(){
		$this->view->render("index",1);
	}

	function actionBerita($action = false, $param = false){
        $controller = new Berita;
        if($action == false){
            $controller->actionIndex();
        }else{
            $action = "action".ucfirst($action);
            $controller->$action($param);
        }
    }

    function actionCategory($action = false, $param = false){
        $controller = new Category;
        if($action == false){
            $controller->actionIndex();
        }else{
            $action = "action".ucfirst($action);
            $controller->$action($param);
        }
    }
}