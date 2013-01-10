<?php
include('../model/model-pesan.php');
include_once ('header.php');
echo "<div class='span7 offset1'>";

$id_detail=$_POST['id_detail'];
$id_etnik=$_POST['id_etnik'];
$id_paket=$_POST['id_paket'];

$hitung=new Pesan("localhost","root","","wedding");
$sewa=$hitung->detailpesan($id_detail);
//if (!empty($vFoo) && !empty($vSomeValue) && !empty($vAnother))

//$dtime = new DateTime($result->my_datetime);
//print $dtime->format("Y-m-d H:i:s");

if(!empty($id_etnik) && !empty($id_paket)){
//echo $id_etnik.",".$id_paket.",".$id_detail;

$paket=$hitung->hargapaket($id_paket);

foreach($sewa as $val){ 

setlocale(LC_MONETARY, 'id_ID');     
//echo money_format('%i', $number) . "\n";
//$dataetnik=$obj->etnik();
								//foreach($dataetnik as $etnik){
?>
<!-- DETAIL PESAN -->
			<div class="well">
				<table width="100%"><tr>
				<td width="1%"></td>
				<td width="90%"><h4>Detail gedung: </h4></td>
				</tr>
				<tr>
				<td></td>
				<td><p>
					Gedung	: <?php echo $val['nama_gedung']; ?></br>
					Tanggal	: <?php echo $val['tanggal']; ?></br>
					Status	: <?php echo $val['status']; ?></br>
				</p></br>
	<!-- VIEW SUBTOTAL -->
				<h4>Detail subtotal: </h4><br>
					<table class="table table-condensed span9" width="100%" border="0">
						<tr>
							<th class="span4">Rincian</th>
							<th class="span3">Harga</th>
						</tr>

								<td><?php echo "Sewa Gedung"; ?></td>
								<td><?php echo "Rp. ".number_format($val['harga'],2,',','.'); ?></td>
							</tr>
							<tr>		
								<?php foreach($paket as $nil){ ?>
								<td><?php echo $nil['nama_paket']." ".$nil['etnik']; ?></td>
								<td><?php echo "Rp. ".number_format($nil['harga'],2,',','.'); ?></td>
							</tr>
							<?php 
							
							$total=$val['harga']+$nil['harga'];
							?>
							<tr>
								<td><b class="text-error">Subtotal* :</b></td>
								<td><b class="text-error"><?php echo "Rp. ".number_format($total,2,',','.'); ?></b></td>
							</tr>
					</table>
				</tr>
				</table>
			</div>

<?php
		}
	}
} else {

foreach($sewa as $val){ 
?>

 <!-- DETAIL PESAN -->
			<div class="well">
				<table width="100%"><tr>
				<td width="1%"></td>
				<td width="90%"><h4>Detail gedung: </h4></td>
				</tr>
				<tr>
				<td></td>
				<td><p>
					Gedung	: <?php echo $val['nama_gedung']; ?></br>
					Tanggal	: <?php echo $val['tanggal']; ?></br>
					Status	: <?php echo $val['status']; ?></br>
				</p></br>
	<!-- VIEW SUBTOTAL -->
				<h4>Detail subtotal: </h4><br>
					<table class="table table-condensed span9" width="100%" border="0">
						<tr>
							<th class="span4">Rincian</th>
							<th class="span3">Harga</th>
						</tr>
							<tr>

								<td><?php echo "Sewa Gedung"; ?></td>
								<td><?php echo "Rp. ".number_format($val['harga'],2,',','.'); ?></td>
							</tr>
							<?php 
							
							$total=$val['harga'];
							?>
							<tr>
								<td><b class="text-error">Subtotal* :</b></td>
								<td><b class="text-error"><?php echo "Rp. ".number_format($total,2,',','.'); ?></b></td>
							</tr>
					</table>
				</tr>
				</table>
			</div>
								

<?php 
	}
}
?>
<div class="well">
		<table width="100%"><tr>
			<td width="1%"></td>
			<td width="90%"><h4>Detail pemesan: </h4></td>
		  </tr>
		  <tr>
			<td></td>
			<td>
			<form method="post" action="view-submitpesan.php">
				Nama 	: <input class="span4" type="text" name="nama" placeholder="Masukkan nama Anda"><br>
				Email 	: <input class="span4" type="email" name="email" placeholder="Masukkan email">
		</table>
		</div>

<!--BUTTON SUBMIT ARRAY-->
<table width="100%" border="0"><tr>
<td width="50%"><a class="btn btn-danger" href="view-pilihpaket.php?detail=<?php echo $id_detail?>">Kembali ke Pilih Paket</a></td>

<input type="hidden" value="<?php echo $id_detail ?>" name="id_detail">
<input type="hidden" value="<?php echo $id_etnik ?>" name="id_etnik">
<input type="hidden" value="<?php echo $id_paket ?>" name="id_paket">
<td width="50%" class="pull-right"><button type="submit" class="btn btn-success btn-block" name= "submit_paket" id="submit">Lanjut Pesan</button></td>
</form>
</tr></table>