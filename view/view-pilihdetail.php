<?php
//include('../model/model-detail.php');
include('../model/model-pesan.php');
include_once ('header.php');
echo "<div class='span8 offset1'>";

$obj=new Pesan("localhost","root","","wedding");

	if(isset($_REQUEST['ged'])){

		$obj->detail($_REQUEST['ged']);
		
		$id_gedung=$_REQUEST['ged'];
		
	?>
<html>
	<body>
	
	<!-- VIEW DETAIL -->
			<div class="well">
				<h4>Pilihan tersedia: </h4>
				<? //if(empty($id_gedung)){ echo "Maaf"; } else { ?>
				<table class="table table-hover" width="100%" border="0">
					<tr>
						<th width="25%">Tanggal</th>
						<th width="25%">Harga</th>
						<th width="25%">Status</th>
						<th width="25%">Pilih</th>
					</tr>
					<?php foreach($obj->data as $val){
							extract($val);
							?>
								<tr align="center">
								<td><?php echo $tanggal; ?></td>
								<td><?php echo $harga; ?></td>
								<td><?php echo $status; ?></td>
									<?php if($id_status==6){ 
										echo "<td> -Tidak  bisa dipilih- </td>"; 
											} else {?>
											<td><a href="view-pilihpaket.php?detail=<?php echo $id_detail; ?>" class="btn btn-success" rel="tooltip" title="Pilih"><i class="icon-ok icon-white" ></i></a>								
											</td>
										<?php } ?>
					</tr>
					<?php } 
					
				echo "</table>";
				}
				echo "</div>";
	//}
	

?>
<!--END VIEW DETAIL-->
<div class="thumbnail">
<h4>Keterangan: </h4>
<p>Anda dapat memilih gedung dengan status 'daftar tunggu'. Silakan atur jadwal dan hubungi Wedding Planner kami pada menu selanjutnya.
Silakan klik tombol 'Pilih' untuk melanjutkan.</p>
</div><br>
<table width="100%" border="0"><tr>
<td><a class="btn btn-danger" href="view-gedung.php">Kembali ke Daftar Gedung</a></td>
</tr></table>
<!--END VIEW DETAIL-->
			
			
		</body>
	</html>
		<!--JS-->