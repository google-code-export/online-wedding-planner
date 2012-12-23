<?php
include('manajemen-gedung.php');
include_once ('../view/head-back.php');
echo "<div class='span6 offset1'>";

if(isset($_REQUEST['submit'])){
	$obj=new Gedung("localhost","root","","crud");
	extract($_REQUEST);
	
	$obj->tambah($nama,$kota,$deskripsi,$gambar);
	
}

?>
<!DOCTYPE html>
<html>
			<br><br>
			<form class='form-horizontal' method='post' action='tambah-gedung.php'>
			<p>
			Nama Gedung: <input type="text" placeholder="Nama Gedung">
			<br><br>
			Kota: <select placeholder="Pilih"><option>1</option>
			</p>
			<p>
			Deskripsi: <textarea rows="3" class="span12" type="text" placeholder="Deskripsi"></textarea>
			</p>
			<button type="submit" class="btn">Simpan</button>
				
			</form></div>
			</body>
		
		</div>
		<!--End form atur jadwal-->