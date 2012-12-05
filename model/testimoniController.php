<?php
 include_once('testimoni.php');
    
		
	// 	if(isset($_SESSION['username']))
	//{
		
		$testi=new Testimoni();
		$data=$testi->getAllTestimoni(); 
	//}
	
	
	
	if(isset($_POST['simpan_testimoni']))
	{
		include_once('testimoni.php');
		$testimoni = new Testimoni();
		
		$tentang=$_POST['tentang'];
		$isi_testi= $_POST['isi_testi'];
		$waktu=date("Y-m-d | H:i:s");
		
		
		if(empty($tentang) || empty($isi_testi))
		{
			$error="Field bertanda bintang harus diisi";
		}
		elseif(!isset($_SESSION['login']))
		{
			$error="Anda Harus Login Terlebih Dahulu";
		}
		 
		else
		{
				$username =  $_SESSION['username'];
				$isi=$testimoni->createTestimoni($username, $tentang, $isi_testi, $waktu);
		}
		
	
}
?>