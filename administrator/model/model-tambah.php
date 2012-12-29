<?php 
include('manajemen-gedung.php');
include_once ('head-back.php');
echo "<div class='span6 offset1'>";

$obj=new Gedung("localhost","root","","wedding");
//$gambar_gedung= echo $_FILE['image']['name'];

if(isset($_REQUEST['submit'])){
	
	if(isset($_FILES['image']) && $_FILES['image']['size'] > 0){
		
		//$gambar_gedung= echo $_FILE['image']['name'];
		
		extract($_REQUEST);
	
		$obj->tambah($nama_gedung, $id_kota, $deskripsi_gedung);
	
	}
}
?>