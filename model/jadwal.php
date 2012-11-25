<?php
	include "koneksi.php";
	include_once ("Plan.php");
	
	class Jadwal {
		
		function viewPlan (){
		
		$konek = new Koneksi();
		$konek->con();
		$query = mysql_query("SELECT * from planner");
		
		while ($data = mysql_fetch_array($query)) {
			$array[$data['Plan_ID']]=new Plan($data['Plan_ID'], $data['Nama'], $data['Telp'], $data['Email'], $data['Tgl_Pernikahan'], $data['Tgl_Temu_WP'], $data['Tempat_Temu']);
		}
		if (!empty($array))
		{
			return $array;
		}
	}
	
		function addPlan ($Nama, $Email, $Telp, $Tgl_Pernikahan, $Tgl_Temu_WP, $Tempat_Temu){
		
		$konek = new Koneksi();
		$konek->con();
		
		$query = mysql_query("INSERT INTO `planner` (`Plan_ID`, `Nama`, `Telp`, `Email`, `Tgl_Pernikahan`, `Tgl_Temu_WP`, `Tempat_Temu`) 
		VALUES ('', '$Nama', '$Telp', '$Email', '$Tgl_Pernikahan', '$Tgl_Temu_WP', '$Tempat_Temu');");
		$plan = $this -> viewPlan();
		return $plan;
	
	}
	}