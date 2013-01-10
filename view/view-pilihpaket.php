<?php
include('../model/model-subtotal.php');
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
//include('../model/model-pesan.php');
include_once ('header.php');
echo "<div class='span7 offset1'>";

$obj=new Pesan("localhost","root","","wedding");

	if(isset($_REQUEST['detail'])){
		
		
		$detail=$obj->detailpesan($_REQUEST['detail']);
		
		$id_detail=$_REQUEST['detail'];
		
		foreach($detail as $val){
			extract($val);
	
	
	?>
<html>
	<body>
	
	<!-- VIEW DETAIL -->
			<div class="well">
				<table width="100%"><tr>
				<td width="1%"></td>
				<td width="90%"><h4>Detail gedung: </h4></td>
				</tr>
				<tr>
				<td></td>
				<td><p>
					Gedung	: <?php echo $nama_gedung; ?></br>
					Tanggal	: <?php echo $tanggal; ?></br>
					Harga	: <?php echo "Rp. ".number_format($harga,2,',','.'); ?></br>
					Status	: <?php echo $status; ?></br>

				</p>
				</tr>
				</table>
			</div>
	<!-- NOTE -->
			<div class="thumbnail">
				<table width="100%"><tr>
				<td width="2%"></td>
				<td width="90%"><h4>Keterangan:</h4></td>
				</tr>
				<tr>
				<td></td>
				<td><p>
				Pilihan etnik dan paket di bawah ini bersifat opsional. <br>
				Bila tidak ingin mendapatkan opsi ini, silakan langsung Submit
				</p>
				</tr>
				</table>

			</div><br>
	<!-- FORM PAKET -->		
			<div class="well">
			 <h4>Pilih paket: </h4>
				<form method="post" action="view-subtotal.php">
					<input type="hidden" name="id_detail" id="id_detail" value=<?php echo $id_detail; ?>>
					<?php }
					?>
					<table width="100%" border="0"><tr>
						<td width="20%">Pilih etnik </td>
						<td width="2%">:
						<td width="79%"> 
						<select name='id_etnik'>
							<option name= 'id_etnik' value="0">-Pilih etnik-</option>
							<?php $dataetnik=$obj->etnik();
								foreach($dataetnik as $etnik){
									//var_dump ($etnik);
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
							<select name='id_paket'>
								<option name= 'id_paket' value="0">-Pilih paket-</option>
							<?php $pilihpaket=$obj->paket();
								foreach($pilihpaket as $paket){
									//var_dump ($etnik);
								?>
								<option name= 'id_paket' id= 'id_paket' value="<?php echo $paket['id_paket'] ?>"><?php echo $paket['nama_paket'] ?></option>
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
						
					</table>
				
			</div>
			
<table width="100%" border="0"><tr>
<td width="50%"><a class="btn btn-danger" href="view-pilihgedung.php">Kembali ke Daftar Gedung</a></td>
<td width="50%" class="pull-right"><button type="submit" class="btn btn-success btn-block" name= "submit_paket" id="submit">Submit</button></td>

</tr></table></form>
</div>
<!--END VIEW DETAIL-->
			
			
		</body>
	</html>
		<!--JS-->
<?php }
 ?>