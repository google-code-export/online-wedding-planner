<?php
include('../model/manajemen-gedung.php');
include_once ('head-back.php');
echo "<div class='span6 offset1'>";

$obj=new Gedung("localhost","root","","wedding");

if(isset($_REQUEST['id'])){

$obj->detail($_REQUEST['id']);
	?>

<html>
	<body>
	<!-- VIEW DETAIL -->
				<table class="table table-hover" width="100%" border="0">
					<tr>
						<th width="25%">Tanggal</th>
						<th width="25%">Status</th>
						<th width="25%">Harga</th>
						<th width="25%">&nbsp;</th>
					</tr>
					<?php foreach($obj->data as $val){
							extract($val);?>
					<tr align="center">
						<td><?php echo $tanggal; ?></td>
						<td><?php echo $status; ?></td>
						<td><?php echo $harga; ?></td>
						<td><a href="../model/ubah-detail.php?edit=<?php echo $id_detail; ?>" class="btn" rel="tooltip" title="Edit"><i class="icon-edit" ></i></a>								
						<a href="../model/hapus-detail.php?hapus=<?php echo $id_detail; ?>" class="btn" rel="tooltip" title="Hapus"><i class="icon-trash" ></i></a></td>
					</tr>
					<?php }
				echo "</table>";

}

?>
<div class="pull-right">
<a class="btn btn-primary" href="view-gedung.php">Kembali ke Daftar Gedung</a></div>
</body>
</html>