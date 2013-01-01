<?php 
include('model-pesan.php');
//include_once ('head-back.php');
//echo "<div class='span6 offset1'>";

$obj=new Pesan("localhost","root","","wedding");

if(isset($_REQUEST['ged'])){
	
	$tgl=$_POST['tgl'];
	
	$id_gedung=$_REQUEST['ged'];
	
	if(empty($tgl)){
			
		$error_cari="Tanggal harus diisi";
	}
	
	else {
		
		//extract($_REQUEST);
	
		$nilai=$obj->cari($id_gedung, $tgl);
		$jumlah=$nilai->num_rows;
			
			if($jumlah==1){
			print_r($nilai);
			//header('location:../view/view-pilihetnik.php');
			} else {
				
				$error_cari="Gedung tidak tersedia. Silakan memilih yang lain";
			}
		}

}
?>