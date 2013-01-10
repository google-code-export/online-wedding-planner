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
if(!empty($id_etnik) && !empty($id_paket)){
//echo $id_etnik.",".$id_paket.",".$id_detail;

$paket=$hitung->hargapaket($id_paket);

setlocale(LC_MONETARY, 'id_ID');     
//echo money_format('%i', $number) . "\n";
//$dataetnik=$obj->etnik();
								//foreach($dataetnik as $etnik){
?>
<!-- VIEW SUBTOTAL -->
			<div class="well">
				<h4>Perhitungan Subtotal: </h4><br>
				<? //if(empty($id_gedung)){ echo "Maaf"; } else { ?>
				<table class="table" width="100%" border="0">
					<tr>
						<th width="25%">Rincian</th>
						<th width="25%">Harga</th>
					</tr>
							<tr align="center">
								<?php foreach($sewa as $val){ ?>
								<td><?php echo $val['nama_gedung']; ?></td>
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
								<td><p class="text-error">Subtotal* :</p></td>
								<td><p class="text-error"><?php echo "Rp. ".number_format($total,2,',','.'); ?></p></td>
							</tr>
					</table>
				</div>								

<?php
		}
	}
} else {
?>

 <div class="well">
				<h4>Perhitungan Subtotal: </h4><br>
				<? //if(empty($id_gedung)){ echo "Maaf"; } else { ?>
				<table class="table table-hover" width="100%" border="0">
					<tr>
						<th width="25%">Rincian</th>
						<th width="25%">Harga</th>
					</tr>
							<tr>
								<?php foreach($sewa as $val){ ?>
								<td><?php echo $val['nama_gedung']; ?></td>
								<td><?php echo "Rp. ".number_format($val['harga'],2,',','.'); ?></td>
							</tr>
							<?php 
							$total=$val['harga'];
							?>
							<tr>
								<td><p class="text-error">Subtotal* :</p></td>
								<td><p class="text-error"><?php echo "Rp. ".number_format($total,2,',','.'); ?></p></td>
							</tr>
					</table>
				</div>
		
<?php
	}
}
?>
<!--BUTTON SUBMIT ARRAY-->
<table width="100%" border="0"><tr>
<td width="50%"><a class="btn btn-danger" href="view-pilihpaket.php?detail=<?php echo $id_detail?>">Kembali ke Pilih Paket</a></td>
<form method="post" action="view-detailpemesan.php">
<input type="hidden" value="<?php echo $id_detail ?>" name="id_detail">
<input type="hidden" value="<?php echo $id_etnik ?>" name="id_etnik">
<input type="hidden" value="<?php echo $id_paket ?>" name="id_paket">
<td width="50%" class="pull-right"><button type="submit" class="btn btn-success btn-block" name= "submit_paket" id="submit">Lanjut Pesan</button></td>
</form>
</tr></table>
