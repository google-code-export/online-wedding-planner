<?php 
include('manajemen-gedung.php');
//include_once ('head-back.php');
//echo "<div class='span6 offset1'>";

$obj=new Gedung("localhost","root","","wedding");

if(isset($_REQUEST['submit'])){
	$nama_gedung=$_POST['nama_gedung'];
	//$id_kota=$_POST['id_kota'];
	$kapasitas=$_POST['kapasitas'];
	$deskripsi=$_POST['deskripsi_gedung'];
	
	if(empty($nama_gedung) || empty($kapasitas) || empty($deskripsi)){
			
		$error_tambah="Data tidak boleh kosong";
		}
		if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
		
		//$gambar_gedung= echo $_FILE['image']['name'];
		
		extract($_REQUEST);
	
		$obj->tambah($nama_gedung, $id_kota, $deskripsi_gedung, $kapasitas);
		
	}
}
?>