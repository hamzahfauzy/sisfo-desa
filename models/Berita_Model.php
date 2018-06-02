<?php
namespace models;
use libs\Model;

class Berita_Model extends Model {
	
	static $table = "berita";
	static $lbl = [	"beritaID","category","judul_berita","isi_berita","berita_updated"];
	
	
}