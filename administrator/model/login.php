<?php
include "authorisasi.php";
$log= new Auth();

if (isset($_POST['login_form'])){
if ($log->login($_POST['Email'],$_POST['Pass'])==true){
	$_SESSION['user']=$_POST['Email'];
	header("Location:../view/daftar-temu.php");
	}
	else{
		//echo "salah";
		header("Location:../index.php");

		}
	
}
?>
