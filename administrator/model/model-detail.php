<?php 
include('manajemen-gedung.php');
//include_once ('head-back.php');
//echo "<div class='span6 offset1'>";

$obj=new Gedung("localhost","root","","wedding");

if(isset($_REQUEST['submit'])){
	$id_gedung=$_POST['id_gedung'];
	//$id_kota=$_POST['id_kota'];
	$tanggal=$_POST['tanggal'];
	$harga=$_POST['harga'];
	$id_status=$_POST['id_stat'];
	
	if(empty($tanggal) || empty($harga)){
			
		$error_tambah="Data tidak boleh kosong";
		} 
		
		else {
		//if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
		
		//$gambar_gedung= echo $_FILE['image']['name'];
		
		extract($_REQUEST);
	
		$obj->tambah_detail($id_gedung, $tanggal, $harga, $id_status);
		
	}
}
?>