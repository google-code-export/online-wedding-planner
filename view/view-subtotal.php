<?php
//include('../model/model-detail.php');
include('../model/model-pesan.php');
include_once ('header.php');
echo "<div class='span8 offset1'>";

$obj=new Pesan("localhost","root","","wedding");

		$obj->detail($_REQUEST['ged']);
		
		$id_gedung=$_REQUEST['ged'];
		
	?>