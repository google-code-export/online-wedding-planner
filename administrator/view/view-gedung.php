<?php
/*session_start();
if (!isset($_SESSION['login'])){
header("Location:../index.php");
}
*/
include('../model/manajemen-gedung.php');
include_once ('head-back.php');
echo "<div class='span7'>";
echo "
<center><h3>Daftar Gedung | <a href='view-tambah-gedung.php'> Tambah Gedung</a></h3></center>
";

$obj=new Gedung("localhost","root","","wedding");
$obj->daftar();

foreach($obj->data as $val){
	extract($val);
?>
<!DOCTYPE html>
<html>
    <script src="../../lib/js/jquery-latest.js"></script>
    <script src="../../lib/js/bootstrap.js"></script>
	
	<!--VIEW GEDUNG-->
		
		<div class="thumbnail">
		<table border="0" width="100%" cellpadding="0" cellspacing = "0">
		<!--thumbnail pilih gedung-->
			<td width="1%" valign="center">
			<td width="40%" valign="center">
				<img src="../../lib/img/<?php echo $gambar_gedung; ?>" class="img-polaroid" width="300"></td>
			<td width="2%" valign="center">
			<td width="55%" valign="center">
				<h4><?php echo $nama_gedung; ?></h4>
				<h5>Kota: <?php echo $nama_kota; ?></h5>
				<p><?php echo $deskripsi_gedung; ?></p>
				<h5>Kapasitas: <?php echo $kapasitas; ?> orang</h5>
				<input type='hidden' name='detail'>
				<p>
				<a href="view-gedung-detail.php?id=<?php echo $id_gedung; ?>" class="btn btn-block btn-primary">Cek Detail</a>
				
				<table border="0" width="100%">
				<tr>
				<td width="50%"><a class="btn btn-block" href="../model/hapus-gedung.php?id=<?php echo $id_gedung; ?>">Hapus</a></td>
				<td width="50%"><a class="btn btn-block" href="view-ubah-gedung.php?edit=<?php echo $id_gedung; ?>">Ubah</a></td>
				<!-- Button to trigger modal
				<td width="50%"><a href="#myModal" type="submit" name='detail' role="button" class="btn btn-block" data-toggle="modal">Edit</a></td>-->
				</tr>
				</table>
				<!-- Modal--> 
				<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel"><?php echo $nama_gedung; ?></h3>
				</div>
				<div class="modal-body">
				<table class="table">
					<tr>
						<th>Tanggal</th>
						<th>Status</th>
						<th>Harga</th>
						<th>&nbsp; </th>
					</tr>
					<?php //foreach($obs->data as $value){
							//extract($value);?>
					<tr>
						<td>A<?php //echo $tanggal; ?></td>
						<td>B<?php //echo $status; ?></td>
						<td>C<?php //echo $harga; ?></td>
						<td class="pull-right"><a class="btn btn-primary" type="button" href="../model/#.php?id=<?php echo $id_detail; ?>" rel="tooltip" title="Pesan">Pesan <i class="icon-shopping-cart" ></i></a></td>
					</tr>
				</table>
  			</div>
  			<div class="modal-footer">
    		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
 		 	</div>
			</div>
			<!--End Modal-->
			</p>
				</td>
				<td width="1%" valign="center"></td>
				</table>
				</div><br>
	
	<!--REPEAT CODE END HERE-->
<?php
}
//}