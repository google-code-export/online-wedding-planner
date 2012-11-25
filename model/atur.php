<?php
include "jadwal.php";
$atur= new Jadwal();

if (isset($_POST['form_jadwal'])){
if ($_POST['Nama']!==""&&$_POST['Telp']!==""&&$_POST['Email']!==""&&$_POST['Tgl_Pernikahan']!==""&&$_POST['Tgl_Temu_WP']!==""&&$_POST['Tempat_Temu']!==""){
				$plan = $atur->addPlan($_POST['Nama'],$_POST['Email'],$_POST['Telp'],$_POST['Tgl_Pernikahan'],$_POST['Tgl_Temu_WP'],$_POST['Tempat_Temu']);
				
				header("Location:../view/sukses.php");
			}
			else 
			{
				echo "data tidak boleh kosong ya :)";
				}
				//$plan = $atur->viewPlan();
				//include '../view/aturjadwal.php';
}
