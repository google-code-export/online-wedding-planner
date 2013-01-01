<?php
//include('../model/model-detail.php');
include('../model/manajemen-gedung.php');
include_once ('head-back.php');
echo "<div class='span6 offset1'>";

$obj=new Gedung("localhost","root","","wedding");

	if(isset($_REQUEST['id'])){

		$obj->detail($_REQUEST['id']);
		
		$id_gedung=$_REQUEST['id'];
	?>
<html>
	<head>
		</head>
	<body>
	
	<!-- VIEW DETAIL -->
				<table class="table table-hover" width="100%" border="0">
					<tr>
						<th width="25%">Tanggal</th>
						<th width="25%">Status</th>
						<th width="25%">Harga</th>
						<th width="25%">Edit | Hapus</th>
					</tr>
					<?php foreach($obj->data as $val){
							extract($val);?>
					<tr align="center">
						<td><?php echo $tanggal; ?></td>
						<td><?php echo $status; ?></td>
						<td><?php echo $harga; ?></td>
						<td><a href="../model/ubah-detail.php?edit=<?php echo $id_detail; ?>" class="btn" rel="tooltip" title="Edit"><i class="icon-edit" ></i></a>								
						<a href="../model/hapus-detail.php?hapus=<?php echo $id_detail; ?>" class="btn" rel="tooltip" title="Hapus"><i class="icon-trash" ></i></a>
						</td>
					</tr>
					<?php }
				echo "</table>";


?>
<table width="100%" border="0"><tr>
<td><a class="btn" href="view-gedung.php">Kembali ke Daftar Gedung</a></td>
<td><div class="pull-right"><a class="btn btn-primary" href="#windowTitleDialog" data-toggle="modal">Tambah Detail</a></div></td>
</tr></table>
<!--END VIEW DETAIL-->

		<script language="JavaScript" type="text/javascript"></script>
			<div id="windowTitleDialog" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true">
				<div class="modal-header">
					<a href="#" class="close" data-dismiss="modal">&times;</a>
					<h3>Tambah Detail</h3>
					</div>
				<div class="modal-body">
					<div class="divDialogElements">
						<input class="xlarge" id="xlInput" name="xlInput" type="hidden" />
						<!--VIEW FORM-->
						    <?php
							if(isset($error_tambah))
								{
								echo '<div class="alert alert-error" id="alert"><strong>Peringatan !</strong> '.$error_tambah.' <button type="button" class="close" data-dismiss="alert" id="close">&times;</button></div>';
							}
							if(isset($success_tambah))
								{
								echo '<div class="alert alert-success">'.$success_tambah.'<button type="button" class="close" data-dismiss="alert" id="close">&times;</button></div>';
							}
							?>
							<form class="form form-inline" method="post" action="../model/model-detail.php">
							<input type="hidden" name="id_gedung" value="<?php echo $id_gedung; } ?>" >
							<input type="date" id='date' class="span4" placeholder="Tanggal" name="tanggal" required="required" data-error="Tanggal harus diisi.">
							<input type="number" class="span4" placeholder="Harga" name="harga">
							<select class="span4">
								<?php 
								$obj->pilih_status();
								foreach ($obj->data as $nilai){ ?>
								<option name= 'id_stat' id= 'id_stat' value="<?php echo $nilai['id_status'] ?>"><?php echo $nilai['status'] ?></option>
								<?php } ?>
							</select>
						
						<!--VIEW FORM-->
						</div>
					</div>
				<div class="modal-footer">
					<a href="#" class="btn" onclick="closeDialog ();">Cancel</a>
					<a class="btn btn-primary" type="submit" name="submit" id="submit">Submit</a>
					</form>
					</div>
				</div>
			
			
		</body>
		<!--JS-->
		<script>
			$(document).ready(function() {
				$('#windowTitleDialog').bind('show', function () {
					document.getElementById ("xlInput").value = document.title;
					});
				});
			function closeDialog () {
				$('#windowTitleDialog').modal('hide'); 
				};
			function okClicked () {
				document.title = document.getElementById ("xlInput").value;
				closeDialog ();
				};
			</script>
			
