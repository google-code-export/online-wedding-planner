<?php
include('../model/model-subtotal.php');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
//include('../model/model-pesan.php');
include_once ('header.php');
echo "<div class='span8 offset1'>";

$obj=new Pesan("localhost","root","","wedding");

	if(isset($error_tambah))
	{
		echo '<div class="alert alert-error" id="alert"><strong>Peringatan !</strong> '.$error_tambah.' 
			<button type="button" class="close" data-dismiss="alert" id="close">&times;</button></div>';
	}
	if(isset($success_tambah))
	{
		echo '<div class="alert alert-success">'.$success_tambah.'<button type="button" class="close" data-dismiss="alert" id="close">&times;</button></div>';
	}

	if(isset($_REQUEST['detail'])){

		$obj->detailpesan($_REQUEST['detail']);
		
		$id_detail=$_REQUEST['detail'];
		
		foreach($obj->data as $val){
			extract($val);
	
	
	?>
<html>
	<body>
	
	<!-- VIEW DETAIL -->
			<div class="well">
				<table width="100%"><tr>
				<td width="2%"></td>
				<td width="90%"><h4>Detail gedung: </h4></td>
				</tr>
				<tr>
				<td></td>
				<td><p>
					Gedung: <?php echo $nama_gedung; ?></br>
					Tanggal: <?php echo $tanggal; ?></br>
					Harga: <?php echo $harga; ?></br>
					Status: <?php echo $status; ?></br>
				</p>
				</tr>
				</table>
			</div>
			<?php } 
			unset($val);
			?>
	<!-- FORM PAKET -->		
			<div class="well">
			 <h4>Pilih paket: </h4>
				<form method="post" action="view-subtotal.php?sub=<?php echo $id_detail; }?>">
					<table width="100%" border="0"><tr>
						<td width="20%">Pilih etnik </td>
						<td width="2%">:
						<td width="79%"> 
						<select name='etnik'>
							<?php $obj->etnik();
								foreach($obj->data as $etnik){ 
								?>
								<option name= 'id_etnik' id= 'id_etnik' value="<?php echo $etnik['id_etnik'] ?>"><?php echo $etnik['etnik'] ?></option>
							<?php  } 
							//unset($etnik);
							?>
							<!--
							<option> -Pilih Etnik- </option>
							<option name="id_etnik" value="1"> Minangkabau </option>
							<option name="id_etnik" value="2"> Tradisional Jawa </option>-->
						</select>
						</td>
					  </tr>
					  <tr>
						<td>Pilih paket: </td>
						<td>:
						<td>
							<label class="checkbox" name="id_paket">
							<?php /*$cek= $obj->paket();
								//$paket=$cek['nama_paket'];
								foreach($obj->data as $paket){
								?>
								<input type='checkbox' name= 'id_paket' id= 'id_paket' value="<?php echo $paket['id_paket'] ?>"> <?php echo $paket['nama_paket'] ?><br>
							<?php }
							//unset($paket);*/
							?>
								<input type='checkbox' name='id_paket[]' value='1'> Pakaian Adat<br>
								<input type='checkbox' name='id_paket[]' value='2'> Dekorasi<br>
								<input type='checkbox' name='id_paket[]' value='3'> Tata rias<br>
							</label>
						</td>
					  </tr>
						<td></td>
						<td></td>
						<td><br><a class="btn btn-success" name= "submit" id="submit">Cek sub-total harga</a></td>
					</table>
				</form>
			</div>
			
<table width="100%" border="0"><tr>
<td><a class="btn btn-danger" href="view-gedung.php">Kembali ke Daftar Gedung</a></td>
</tr></table>
</div>
<!--END VIEW DETAIL-->
			
			
		</body>
	</html>
		<!--JS-->
<?php 
 ?>