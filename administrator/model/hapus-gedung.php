<?php
include('manajemen-gedung.php');
$obj=new Gedung("localhost","root","","wedding");
if(isset($_REQUEST['id'])){

$obj->hapus($_REQUEST['id']);

}
?>