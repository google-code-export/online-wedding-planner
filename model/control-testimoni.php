<?php
include "model-testimoni.php";
$atur= new Testimoni();

	
if (isset($_POST['form_testimoni'])){
if ($_POST['nama']!==""&&$_POST['email']!==""&&$_POST['isi_testi']!==""){
				$testimoni = $atur->addTesti($_POST['nama'],$_POST['email'],$_POST['isi_testi']);
				
				header("Location:../view/view-testimoni.php");
			}
			else 
			{
				echo '<div class="alert alert-error" id="alert">Salah ! 
			<button type="button" class="close" data-dismiss="alert" id="close">×</button></div>';
				}
}