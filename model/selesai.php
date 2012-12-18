<?php

 // connect to the database
 include('../model/koneksi.php');
 $konek = new Koneksi();
 $konek->con();
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 
 // delete the entry
 $result = mysql_query("UPDATE planner SET id_status = 2 WHERE Plan_ID=$id")
 or die(mysql_error()); 
 
 // sukses, balik ke list
 header("Location: ../view/test.php");
 //echo "sukses";
 }
 else
 // gagal, balik ke list
 {
 //header("Location: ../view/test.php");
 echo "gagal";
 }
 
?>