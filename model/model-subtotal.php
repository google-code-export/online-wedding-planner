<?php 
include('model-pesan.php');
//include_once ('head-back.php');
//echo "<div class='span6 offset1'>";

$obj=new Pesan("localhost","root","","wedding");

if(isset($_POST['submit'])){
	$id_detail=$_POST['id_detail'];
	$id_etnik=$_POST['id_etnik'];
	$id_paket=$_POST['id_paket'];
	$jumlah=count($id_paket);
	
	if($jumlah>0){
		for($i=0; $i<$jumlah; $i++){
			//$var=$id_paket[$i];
			$obj->hargapaket($id_paket, $etnik);
			}
	} else {
		//boleh mesan gedung aja, ga mesen paket
		extract($_REQUEST);
	
		$obj->hargasewa($id_detail);
		
	}
}