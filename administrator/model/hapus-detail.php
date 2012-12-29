<?php
include('manajemen-gedung.php');
$obj=new Gedung("localhost","root","","wedding");
if(isset($_REQUEST['hapus'])){

$obj->hapusDetail($_REQUEST['hapus']);

}
?>