<?php
include('model-pesan.php');

$pesanan=new Pesan("localhost","root","","wedding");

if(isset($_REQUEST['submit_pesan'])){
	//if(isset($_POST['setuju'])){
	//$setuju=$_POST['setuju'];
	$id_detail=$_POST['id_detail'];
	$id_paket=$_POST['id_paket'];
	$id_etnik=$_POST['id_etnik'];
	$nom=$_POST['nom'];
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$total=$_POST['total'];
	$tanggal=$_POST['tgl'];
	
	if(empty($_POST['setuju'])){
		$error_submit="Anda belum menyetujui Term dan Kondisi";
		} else {
			extract($_REQUEST);
			$pesanan->pesanan($nom, $tanggal, $nama, $email, $id_detail, $id_paket, $id_etnik, $total);
		}
	}
//}