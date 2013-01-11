<?php
include('../model/model-submitpesan.php');
include_once ('header.php');
echo "<div class='span6 offset1'>";

//menampilkan PO number
	function random_string() {
    $character_set_array = array();
    $character_set_array[] = array('count' => 3, 'characters' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $character_set_array[] = array('count' => 4, 'characters' => '0123456789');
    $temp_array = array();
    foreach ($character_set_array as $character_set) {
        for ($i = 0; $i < $character_set['count']; $i++) {
            $temp_array[] = $character_set['characters'][rand(0, strlen($character_set['characters']) - 1)];
        }
    }
    shuffle($temp_array);
    return implode('', $temp_array);
	}
$nom=random_string();

$id_detail=$_POST['id_detail'];
$id_etnik=$_POST['id_etnik'];
$id_paket=$_POST['id_paket'];
$nama=$_POST['nama'];
$email=$_POST['email'];
//date_default_timezone_set('Indonesia/Jakarta');
$tanggal = date('m/d/Y h:i:s a', time());

$hitung=new Pesan("localhost","root","","wedding");
$sewa=$hitung->detailpesan($id_detail);

if(isset($error_submit)) {
	echo '<div class="alert alert-error" id="alert">
		<button type="button" class="close" data-dismiss="alert" id="close">&times;</button>'
		.$error_submit.'
		</div>';
		}
if(isset($success_submit)) {
	echo '<div class="alert alert-success" id="alert">
		<button type="button" class="close" data-dismiss="alert" id="close">&times;</button>'
		.$success_submit.'
		</div>';
		}	
else
		{

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
							<td width="30%">Tanggal</td>
							<td width="1%">:</td>
							<td> <?php echo $tanggal; ?></td>
						</tr>
						<tr>
							<td></td>
							<td>Nama</td>
							<td>:</td>
							<td> <?php echo $nama; ?></td>
						</tr>
						<tr>
							<td></td>
							<td>Email</td>
							<td>:</td>
							<td> <?php echo $email; ?></td>
						</tr>
					</table>
					</td>	
				</tr>
				</table>
				</br>
			</div><br>

<?php
if(!empty($id_etnik) && !empty($id_paket)){
	foreach($sewa as $val){
?>

<!-- DETAIL PESAN -->
			<div class="well">
				<table width="100%"><tr>
				<td width="1%"></td>
				<td width="90%"><center><h4>Detail Gedung </h4></td>
				</tr>
				<tr>
				<td></td>
				<td>
					<table width="100%" border="0">
						<tr>
							<td width="40%">
								<img src="../lib/img/<?php echo $val['gambar_gedung']; ?>" class="img-polaroid" width="200">
							</td>
							<td width="1%"></td>
							<td>
								<b><?php echo $val['nama_gedung']; ?></b><br>
								<p>
								Tanggal Sewa: <?php echo $val['tanggal']; ?><br>
								Alamat: <?php echo $val['alamat']; ?><br>
								Status: <?php echo $val['status']; ?>
								</p>
							</td>
						</tr>
					</table>
				</td>
				</table>
				<br>

	<!-- VIEW SUBTOTAL -->
				<center><h4>Detail subtotal: </h4></center><br>
					<table class="table table-condensed" border="0">
						<tr>
							<th width="50%">Rincian</th>
							<th width="50%">Harga</th>
						</tr>
							<tr>

								<td><?php echo "Sewa Gedung"; ?></td>
								<td><?php echo "Rp. ".number_format($val['harga'],2,',','.'); ?></td>
							</tr>
							<tr>		
								<?php $paket=$hitung->hargapaket($id_paket);
								foreach($paket as $nil){ ?>
								<td><?php echo $nil['nama_paket']." ".$nil['etnik']; ?></td>
								<td><?php echo "Rp. ".number_format($nil['harga'],2,',','.'); ?></td>
							</tr>
							<?php 
							if(!empty($nil['harga'])){
							$total=$val['harga']+$nil['harga'];}
							else {$total=$val['harga'];}
							?>
							<tr>
								<td><b class="text-error">Subtotal* :</b></td>
								<td><b class="text-error"><?php echo "Rp. ".number_format($total,2,',','.'); ?></b></td>
							</tr>
					</table>
				</tr>
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
				<td width="90%"><center><h4>Detail Gedung </h4></td>
				</tr>
				<tr>
				<td></td>
				<td>
					<table width="100%" border="0">
						<tr>
							<td width="40%">
								<img src="../lib/img/<?php echo $val['gambar_gedung']; ?>" class="img-polaroid" width="200">
							</td>
							<td width="1%"></td>
							<td>
								<b><?php echo $val['nama_gedung']; ?></b><br>
								<p>
								Tanggal Sewa: <?php echo $val['tanggal']; ?><br>
								Alamat: <?php echo $val['alamat']; ?><br>
								Status: <?php echo $val['status']; ?>
								</p>
							</td>
						</tr>
					</table>
				</td>
				</table>
				<br>
	<!-- VIEW SUBTOTAL -->
				<center><h4>Detail subtotal: </h4></center>
					<table class="table table-condensed" border="0">
						<tr>
							<th width="50%">Rincian</th>
							<th width="50%">Harga</th>
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
<!--BUTTON SUBMIT ARRAY-->
<form method="post" action="#">
<table width="100%" border="0"><tr>
<input type="hidden" value="<?php echo $id_detail; ?>" name="id_detail">
<input type="hidden" value="<?php echo $id_etnik; ?>" name="id_etnik">
<input type="hidden" value="<?php echo $id_paket; ?>" name="id_paket">
<input type="hidden" value="<?php echo $nom; ?>" name="nom">
<input type="hidden" value="<?php echo $tanggal; ?>" name="tgl">
<input type="hidden" value="<?php echo $nama; ?>" name="nama">
<input type="hidden" value="<?php echo $email; ?>" name="email">
<input type="hidden" value="<?php echo $total; ?>" name="total">
<label class="checkbox">
<input type="checkbox" name="setuju" value="1"> <a href="">Setuju dengan Term dan Kondisi</a>
</label>
<td><button type="submit" class="btn btn-success btn-block" name= "submit_pesan" id="submit"><i class="icon-white icon-shopping-cart"></i> Submit Pesan</button></td>
</form>
</tr></table>
</div>
<?php
}