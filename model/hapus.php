<?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'players' table
*/

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
 $result = mysql_query("DELETE FROM planner WHERE Plan_ID=$id")
 or die(mysql_error()); 
 
 // sukses, balik ke list
 //echo "sukses";
 echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button><b>Sukses! </b>Data sukses dihapus</div>";
 header("Location: ../view/test.php");
 
 
 }
 else
 // gagal, balik ke list
 {
 header("Location: ../view/test.php");
 //echo "gagal";
 }
 
?>