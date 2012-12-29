<?php
include('../model/model-tambah.php');
include_once ('head-back.php');
echo "<div class='span6 offset1'>";


	if(isset($error_tambah))
	{
		echo '<div class="alert alert-error" id="alert"><strong>Peringatan !</strong> '.$error_tambah.' 
			<button type="button" class="close" data-dismiss="alert" id="close">&times;</button></div>';
	}
	if(isset($success_tambah))
	{
		echo '<div class="alert alert-success">'.$success_tambah.'<button type="button" class="close" data-dismiss="alert" id="close">&times;</button></div>';
	}


$obj=new Gedung("localhost","root","","wedding");

$obj->opsi();

	//echo $val['nama_kota'];
	/*
	extract ($val);
*/

?>
<!DOCTYPE html>
<html>

    <div class="span9">
	
	<center><h3>Tambah Gedung </h3></center>
	<div class="container">
	<div style="margin:15px 15px 15px 15px">
		
		<form class="form-horizontal" method="post" action="#" enctype="multipart/form-data">
		<fieldset>
  		<div class="control-group">
    	<label class="control-label" for="#">Nama Gedung</label>
    	<div class="controls">
      	<input class= "span3" type="text" id="nama_gedung" name='nama_gedung'> </div> </div>
		
		<!--
		<div class="control-group">
    	<label class="control-label" for="#">Alamat</label>
    	<div class="controls">
     	<textarea rows="3" input type="#" id="#" placeholder="" name='nama'> </textarea> </div> </div>
		-->
		
		<div class="control-group">
    	<label class="control-label" for="#">Kota</label>
    	<div class="controls">
		<select class='span3' name='id_kota'>
		<?php foreach ($obj->data as $val){ ?>
  		<option name= 'id_kota' id= 'id_kota' value="<?php echo $val['id_kota'] ?>"><?php echo $val['nama_kota'] ?></option>
		<?php } ?>
		</select> </div> </div>
		
		<div class="control-group">
    	<label class="control-label" for="#">Kapasitas</label>
    	<div class="controls">
     	<input class='span3' type="number" id="kapasitas" name="kapasitas"> </div> </div>
		
		<div class="control-group">
    	<label class="control-label" for="#">Deskripsi</label>
    	<div class="controls">
     	<textarea class='span3' rows="3" input type="text" id="deskripsi_gedung" name="deskripsi_gedung"> </textarea> </div> </div>
		
		<div class="control-group">
    	<label class="control-label" for="file">Gambar</label>
    	<div class="controls">
     	<input class="span4" type="file" accept="image/jpeg" name= "image" for="file" id="file"><br>
		 <!--<button class="btn" type="submit" name="submit">Browse</button> -->
		 </div> </div>

		 <div class="control-group">
		 <div style="margin-left:200px">
		 <table width="20%" border="0">
		 <tr>
		 <td width="50%"><button type="submit" name="submit" class="btn btn-primary">Submit</button></td>
		 <td width="50%"><a class="btn" href="view-gedung.php">Batal</a></td>
    	 <tr>
		 <td>
		 </table>
		 </div></div>
		</fieldset>
		</form>
    
	</div>
	</div>
	
	</div>
	</div>

		<!--End form-->