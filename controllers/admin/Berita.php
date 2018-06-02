<?php 
namespace controllers\Admin;

use libs\Controller;
use libs\Session;
use models\Berita_Model;
use models\Gambar_Model;
use models\Category_Model;

class Berita extends Controller{

	function __construct(){
		parent::__construct();
		Session::init();
		$this->view->layouts = "admin-layouts";
		$this->view->controller = "admin/berita";
		$this->view->title = "Administration Panel";
	}

	function actionIndex(){
		$model = new Berita_Model;
		$model->find()->execute();
		$label = ["Judul Berita","Berita Updated","Aksi"];
		$data["model"] = $model;
		$data["label"] = $label;
		$this->view->render("index",1,$data);
	}

	function actionTambah(){
		$model = new Berita_Model;
		$category = new Category_Model;
		$category->find()->execute();
		$data["category"] = $category;
		if($this->request("POST")){
			$model->attr($_POST);
			if($model->save()){
				$this->redirect("admin/berita");
			}

		}
		$this->view->render("tambah",1,$data);
	}

	function actionUbah($param){
		$model = new Berita_Model;
		$model->find()->where(["beritaID"=>$param])->one();
		$category = new Category_Model;
		$category->find()->execute();
		$data["category"] = $category;
		if($this->request("POST")){
			$model->attr($_POST);
			if($model->save()){
				$this->redirect("admin/berita");
			}
		}
		$data["model"] = $model->data;
		$this->view->render("ubah",1,$data);
	}

	function actionHapus($param){
		$model = new Berita_Model;
		$model->delete(["beritaID"=>$param]);
		$this->redirect("admin/berita");
	}

	function actionDetail($param){
		$model = new Berita_Model;
		$gambar = new Gambar_Model;
		$gambar->find()->where(["beritaID"=>$param])->execute();
		$model->find()->where(["beritaID"=>$param])->one();
		$data["model"] = $model;
		$data["gambar"] = $gambar;
		$this->view->render("detail",1,$data);
	}

	function actionUpload(){
		if(isset($_FILES["file_path"])){
            $model = new Gambar_Model;
            $file = $_FILES["file_path"];
            copy($file['tmp_name'],"uploads/berita/".$file['name']);
            $model->beritaID = $_POST["beritaID"];
            $model->file_path = "uploads/berita/".$file['name'];
            $model->save();
            return $this->redirect("admin/berita");
        }
	}

	function actionHapusgambar(){
		$model = new Gambar_Model;
		$model->delete(["gambarID"=>$_POST["gambarID"]]);
		$this->redirect("admin/berita");
	}
}