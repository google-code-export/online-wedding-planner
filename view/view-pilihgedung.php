<?php
/*session_start();
if (!isset($_SESSION['login'])){
header("Location:../index.php");
}
*/
include('../model/model-pesan.php');
include_once ('header.php');
?>
<!--START MENU BAR-->
		<div class="span8 offset1">
		
		<div style="margin: 5px 0px 5px 20px;">
		<ul class="thumbnails">
		<li class="span2">
		<a href="pilihgedung.php" class="thumbnail">
		<img src="../lib/img/ic1.png" alt="">
		  <h6><center>Pilih Gedung</center></h6>
		</a>
		</li>
		
		<li class="span2">
		<a class="thumbnail">
		<img src="../lib/img/ic2a.png" alt="">
		  <h6><center>Pilih Etnik</center></h6>
		</a>
		</li>
		
		<li class="span2">
		<a class="thumbnail">
		<img src="../lib/img/ic3a.png" alt="">
		  <h6><center>Atur Paket</center></h6>
		</a>
		</li>
		
		<li class="span2">
		<a class="thumbnail">
		<img src="../lib/img/ic4a.png" alt="">
		  <h6><center>Atur Jadwal</center></h6>
		</a>
		</li>
		<li></li>
		<li></li>
		
		<li class="span3">
		<a href="pilihetnik.php" class="thumbnail">
		<img src="../lib/img/ic5.png" alt="">
		  <h6><center>Lewati Langkah Ini</center></h6>
		</a>
		</li>
</ul> </div>
		<!--END MENU BAR-->
		<center><h4>sort by: Gedung | <a href='view-tersedia.php'>Ketersediaan</a></h4>
		
				
			</center>
<?php
$obj=new Pesan("localhost","root","","wedding");

if(isset($error_cari))
	{
		echo '<div class="alert alert-error" id="alert"><strong>Peringatan !</strong> '.$error_cari.' 
			<button type="button" class="close" data-dismiss="alert" id="close">&times;</button></div>';
	}
	if(isset($success_tambah))
	{
		echo '<div class="alert alert-success">'.$success_tambah.'<button type="button" class="close" data-dismiss="alert" id="close">&times;</button></div>';
	}
	?>
<?php
$obj->daftar();

foreach($obj->data as $val){
	extract($val);
?>
<!DOCTYPE html>
<html>
    <script src="../lib/js/jquery-latest.js"></script>
    <script src="../lib/js/bootstrap.js"></script>
	<script src="../lib/js/pikaday.js"></script>
	
    <link rel="stylesheet" href="../lib/css/pikaday.css">
	
	<!--VIEW GEDUNG-->
		
		<div class="well well-small">
		<table border="0" width="100%"><tr>
		<!--thumbnail pilih gedung-->
			<td width="1%" valign="center">
			<td width="40%" valign="center">
				<img src="../lib/img/<?php echo $gambar_gedung; ?>" class="img-polaroid" width="300"></td>
			<td width="2%" valign="center">
			<td width="55%" valign="center">
				<h4><?php echo $nama_gedung; ?></h4>
				<h5>Alamat: <?php echo $alamat; ?>, <?php echo $nama_kota; ?></h5>
				<h5>Kapasitas: <?php echo $kapasitas; ?> orang</h5>
				<h5>Deskripsi: </h5>
				<p>
				<?php echo $deskripsi_gedung; ?>
				</p>
				<table border="0" width="100%">
				<tr>
				<td width="47%">
				<!-- Button to trigger modal-->
				<a class="btn btn-block" role="button" href="#myModal" data-toggle="modal" >Detail</a></td>
				<td width="1%"></td>
				<td width="50%"><a class="btn btn-block btn-success" href="view-pilihdetail.php?ged=<?php echo $id_gedung ?>">Pesan</a></td>
				</tr>
				</table>
				</form>
			<!-- Modal--> 
			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel"><?php echo $nama_gedung; ?></h3>
			</div>
			<div class="modal-body">
				<p>
					<p><?php echo $deskripsi_gedung; ?></p>
					<i class="icon-minus"></i> <?php echo $alamat; ?>, <?php echo $nama_kota; ?> <br>
					<!--<i class="icon-minus"></i> Harga sewa : Rp 15.000.000,00 (lima belas juta rupiah) <br>-->
					<i class="icon-minus"></i> Waktu tersedia : <?php echo $waktu; ?> <br>
					<i class="icon-minus"></i> <?php echo $keterangan; ?> <br>
					<i class="icon-minus"></i> Kapasitas <?php echo $kapasitas; ?> orang
				</p>
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

<script>
        var picker = new Pikaday({
        field: document.getElementById('datepicker'),
        onSelect: function(date) {
            field.value = picker.getDate();
        }
    });
</script>
	<!--REPEAT CODE END HERE-->
<?php
	//}
}