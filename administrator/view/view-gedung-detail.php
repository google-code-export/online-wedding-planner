<?php
include('../model/manajemen-gedung.php');
include_once ('head-back.php');
echo "<div class='span6 offset1'>";

$obj=new Gedung("localhost","root","","wedding");

if(isset($_REQUEST['id'])){

$obj->detail($_REQUEST['id'],[]);

//if($obj->data[''])
foreach($obj->data as $val){
	
	//echo $val['nama_gedung'];
	extract($val);
//print_r($obj);
?>
	<div class='span6'>
	<div class='well'><center>
	<td><h4><?php //echo $nama_gedung; ?></h4></td>
	<td><?php //echo "<img src=../../lib/img/$gambar_gedung class=img-polaroid >" ?></td>
	<td><?php //echo $deskripsi_gedung; ?></td><br>
	<td><?php echo $tanggal; ?></td><br>
	<td><?php echo $harga; ?></td><br>
	<td><?php echo $status; ?></td>
	</center>
	</div></div>

<?php
	}
}
?>