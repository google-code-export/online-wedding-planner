<?php
include "koneksi.php";
include "Plan.php";

class Pagination {
	
	function paging(){
	$konek = new koneksi();
	$konek->con();
	$dataPage = 5;
	
	if(isset($_GET['page'])){
			$noPage = $_GET['page'];
		}
		else $noPage = 1;
	
	$offset = ($noPage - 1) * $dataPage;
	$query= "SELECT * from planner LIMIT $offset, $dataPage";
	$result = mysql_query($query) or die('Error');
	
	while ($data = mysql_fetch_array($query)) {
			$array[$data['Plan_ID']]=new Plan($data['Plan_ID'], $data['Nama'], $data['Telp'], $data['Email'], $data['Tgl_Pernikahan'], $data['Tgl_Temu_WP'], $data['Tempat_Temu']);
		
		echo $array;
		}
		
	}
}
$tes= new Pagination();
$tes->paging();