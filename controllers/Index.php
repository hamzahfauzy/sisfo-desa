<?php
namespace controllers;
use libs\Controller;
use libs\Session;
use models\Berita_Model;
use models\Category_Model;
use models\Gambar_Model;

class Index extends Controller {

	function __construct(){
		parent::__construct();
	}

	function actionIndex(){
		$this->view->title = "Index";
		$model = new Berita_Model;
		$category = new Category_Model;
		$gambar = function($id){
			$model = new Gambar_Model;
			$model->find()->where(["beritaID"=>$id])->one();
			return $model;
		};
		$category->find()->execute();
		$model->find()->execute();
		$data["model"] = $model;
		$data["category"] = $category;
		$data["gambar"] = $gambar;
		return $this->view->render("index",1,$data);
	}

	function actionDetail($id){
		$this->view->title = "Berita";
		$model = new Berita_Model;
		$category = new Category_Model;
		$category->find()->execute();
		$gambar = function($id){
			$model = new Gambar_Model;
			$model->find()->where(["beritaID"=>$id])->one();
			return $model;
		};
		$model->find()->where(["beritaID"=>$id])->one();
		$data["model"] = $model;
		$data["category"] = $category;
		$data["gambar"] = $gambar;
		$this->view->render("detail",1,$data);
	}
	

}