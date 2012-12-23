<?php
include('../model/manajemen-gedung.php');
include_once ('head-back.php');
echo "<div class='span6 offset1'>";

$obj=new Gedung("localhost","root","","wedding");
if(isset($_REQUEST['id'])){

$obj->daftarSatu($_REQUEST['id']);

foreach($obj->data as $val){
	extract($val);
//print_r($obj);
?>
<center><h3><?php echo $nama_gedung; ?></h3></center>
<div class='row'>
        <div <!-- class='span12'-->     
		    <table class='table table-striped'>
				<th>Gambar Gedung</th>
				<th>Nama Gedung</th>
				<th>Lokasi</th>
				<th>Deskripsi</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
<?php

?>
	
	<tr>
    
	<td><?php echo "<img src=../lib/img/$gambar_gedung width='200' height='200' >" ?></td>
    <td><?php echo $nama_gedung; ?></a></td>
    <td><?php echo $id_kota; ?></td>
    <td><?php echo $deskripsi_gedung; ?></td>
  
	 <td><a href="../model/#.php?id=<?php echo $Plan_ID; ?>" class=btn" rel="tooltip" title="Proses"><i class="icon-refresh" ></i></a></td>
	 <td><a href="../model/#.php?id=<?php echo $Plan_ID; ?>" class=btn" rel="tooltip" title="Selesai"><i class="icon-thumbs-up" ></i></a></td>
	 <td><a href="../model/#.php?id=<?php echo $Plan_ID; ?>" class=btn" rel="tooltip" title="Hapus"><i class="icon-trash" ></i></a></td>

	</tr>
<?php
	}
}
?>