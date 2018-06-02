<?php 
namespace controllers\Admin;

use libs\Controller;
use libs\Session;
use models\Category_Model;


class Category extends Controller{

	function __construct(){
		parent::__construct();
		Session::init();
		$this->view->layouts = "admin-layouts";
		$this->view->controller = "admin/category";
		$this->view->title = "Administration Panel";
	}

	function actionIndex(){
		$model = new Category_Model;
		$model->find()->execute();
		$label = ["ID Category","Nama Category","Aksi"];
		$data["label"] = $label;
		$data["model"] = $model;
		$this->view->render("index",1,$data);
	}

	function actionTambah(){
		$model = new Category_Model;
		$model->find()->execute();
		if($this->request("POST")){
			$model->attr($_POST);
			if($model->save()){
				$this->redirect("admin/category");
			}

		}
		$this->view->render("tambah",1);
	}

	function actionUbah($param){
		$model = new Category_Model;
		$model->find()->where(["categoryID"=>$param])->one();
		if($this->request("POST")){
			$model->attr($_POST);
			if($model->save()){
				$this->redirect("admin/category");
			}
		}
		$data["model"] = $model->data;
		$this->view->render("ubah",1,$data);
	}

	function actionHapus($param){
		$model = new Category_Model;
		$model->delete(["categoryID"=>$param]);
		$this->redirect("admin/category");
	}
}
