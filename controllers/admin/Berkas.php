<?php 
namespace controllers\Admin;

use libs\Controller;
use libs\Session;
use models\Berkas_Model;

class Berkas extends Controller{

	function __construct(){
		parent::__construct();
		Session::init();
		$this->view->layouts = "admin-layouts";
		$this->view->controller = "admin/berkas";
		$this->view->title = "Administration Panel";
	}

	function actionIndex(){
		$model = new Berkas_Model;
		$model->find()->execute();
		$label = ["ID Berkas","Nama File","Aksi"];
		$data["label"] = $label;
		$data["model"] = $model;
		$this->view->render("index",1,$data);
	}

	function actionTambah(){
		if(isset($_FILES["file_path"])){
            $model = new Berkas_Model;
            $file = $_FILES["file_path"];
            copy($file['tmp_name'],"uploads/berkas/".$file['name']);
            $model->berkasID = $_POST["berkasID"];
            $model->nama_file = $_POST["nama_file"];
            $model->file_path = "uploads/berkas/".$file['name'];
            $model->save();
            return $this->redirect("admin/berkas");
        }
        $this->view->render("tambah",1);
	}

	function actionHapus($param){
		$model = new Berkas_Model;
		$model->delete(["berkasID"=>$param]);
		$this->redirect("admin/berkas");
	}
}