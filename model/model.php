<?php
include_once ("Plan.php");
class Model{
	function Koneksi(){
		$connect = mysql_connect('localhost', 'root', '');
		if (!$connect) {
			die('Could not connect: ' . mysql_error());
			echo 'failed';
		}
		$dbselect = mysql_select_db('wedding');
		return $dbselect;
	}
	
	function viewPlan (){
		$dataPage = 5;
		if(isset($_GET['page'])){
			$noPage = $_GET['page'];
		}
		else $noPage = 1;
	
		$offset = ($noPage - 1) * $dataPage;
		
		$konek = $this -> Koneksi();
		$query = mysql_query("SELECT * from planner");
		/*
		LIMIT $offset, $dataPage");
		$result = mysql_query($query);
		*/
		while ($data = mysql_fetch_array($query)) {
			$array[$data['Plan_ID']]=new Plan($data['Plan_ID'], $data['Nama'], $data['Telp'], $data['Email'], $data['Tgl_Pernikahan'], $data['Tgl_Temu_WP'], $data['Tempat_Temu']);
		}
		if (!empty($array))
		{
			return $array;
		}
	}
	
	function addPlan ($Nama, $Email, $Telp, $Tgl_Pernikahan, $Tgl_Temu_WP, $Tempat_Temu){
		
		$konek = $this -> Koneksi();
		$query = mysql_query("INSERT INTO `planner` (`Plan_ID`, `Nama`, `Telp`, `Email`, `Tgl_Pernikahan`, `Tgl_Temu_WP`, `Tempat_Temu`) 
		VALUES ('', '$Nama', '$Telp', '$Email', '$Tgl_Pernikahan', '$Tgl_Temu_WP', '$Tempat_Temu');");
		$plan = $this -> viewPlan();
		return $plan;
}
	function editOne($Plan_ID)
	{
		$plan = $this->viewPlan();
		return $plan[$Plan_ID];
	}
	
	function editPlan($Plan_ID, $Nama, $Email, $Telp, $Tgl_Pernikahan, $Tgl_Temu_WP, $Tempat_Temu)
	{
		$konek = $this -> Koneksi();
		$query = mysql_query("UPDATE `planner` SET `Nama` = '$Nama', `Telp` = '$Telp', `Email` = '$Email', 
		`Tgl_Pernikahan` = '$Tgl_Pernikahan', `Tgl_Temu_WP` = '$Tgl_Temu_WP' where `Plan_ID` = '$Plan_ID';");
		$plan = $this->viewPlan();
		return $plan;
	}
	
	function deletePlan($Plan_ID)
	{
		$konek = $this -> Koneksi();
		$query = mysql_query("delete from planner where Plan_ID='$Plan_ID'");
		$plan = $this->viewPlan();
		return $plan;
	}
	
	
}
