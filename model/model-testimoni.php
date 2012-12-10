<?php
	include "koneksi.php";
	include_once ("db-testimoni.php");
	
	class Testimoni {
		
		function viewTesti (){
		
		$konek = new Koneksi();
		$konek->con();
		$query = mysql_query("SELECT * from testimoni");
		
		while ($data = mysql_fetch_array($query)) {
			$array[$data['testi_id']]=new Testi($data['testi_id'], $data['nama'], $data['email'], $data['isi_testi']);
		}
		if (!empty($array))
		{
			return $array;
		}
	}
	
		function addTesti ($nama, $email, $isi_testi){
		
		$konek = new Koneksi();
		$konek->con();
		
		$query = mysql_query("INSERT INTO `testimoni` (`testi_id`, `nama`, `email`, `isi_testi`) 
		VALUES ('', '$nama', '$email', '$isi_testi');");
		$testimoni = $this -> viewTesti();
		return $testimoni;
	
	}
	}