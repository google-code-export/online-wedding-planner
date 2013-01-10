<?php
include('../model/model-pesan.php');
include_once ('header.php');
echo "<div class='span7 offset1'>";

?>
<div class="alert alert-success" id="alert">
		<button type="button" class="close" data-dismiss="alert" id="close">&times;</button>
		<strong>Sukses!</strong> Data yang Anda masukkan telah kami terima. Silakan mengecek status pesanan pada <a href="#" class="text-info">Halaman Konfirmasi</a> dengan memasukkan No. Order Anda. Terima Kasih.
		</div>
<?php
if(isset($_REQUEST['order'])){
	$display=new Pesan("localhost","root","","wedding");
	$order=$display->orderlink($_REQUEST['order']);
	foreach($order as $val){
?>
<!-- DETAIL PEMESANAN -->
			<div class="thumbnail">
				<table width="100%" border="0"><tr>
					<td width="1%"></td>
					<td width="90%"><center><h4>Detail Pemesanan </h4></td>
				</tr>
				<tr>
					<td></td>
					<td>
					<table width="100%" border="0">
						<tr>
							<td width="20%"></td>
							<td width="30%"><h3>No. Pesan </h3></td>
							<td width="1%">:</td>
							<td><h3> <?php echo $val['no_pesan']; ?></h3></td>
						</tr>
						<tr>
							<td></td>
							<td>Tanggal</td>
							<td>:</td>
							<td> <?php echo $val['tanggal']; ?></td>
						</tr>
						<tr>
							<td></td>
							<td>Nama</td>
							<td>:</td>
							<td> <?php echo $val['nama']; ?></td>
						</tr>
						<tr>
							<td></td>
							<td>Email</td>
							<td>:</td>
							<td> <?php echo $val['email']; ?></td>
						</tr>
					</table>
					</td>	
				</tr>
				</table>
				</br>
			</div><br>
	<?php
	}
}	