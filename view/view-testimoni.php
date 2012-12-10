<?php
include_once ('header.php');
echo "<div class='span8'>";
?>

<!DOCTYPE html>
<html>
		<!--tempat testimoni-->
			<center><img src="../lib/img/testimoni_header.png"> </center><br>
			<div class='span10'>
			<form class="form-horizontal" method="post" action="../model/control-testimoni.php">
			<tr>
			<td>
			  <p>
			  <input type='hidden' name='form_testimoni'>
			Your Name	: 
			<input type="text" name="nama" id="inputNama" placeholder="Nama"> 
			Your Email	: 
			    <input type="email" name="email" id="inputEmail" placeholder="Email"> 
		      </p>
			  <ce
			  nter>
			  <p>
			    <textarea rows="3" class="span12" input type="text" name="isi_testi" id="inputIsi" placeholder="Isi testimoni..."></textarea>
			  </p>
			  <button type="submit" name="simpan_testimoni" class="btn pull-right" id="daftar_btn">Submit</button>
			</form>
			</div>
			<br>
			<!--<div class="pagination pagination-right">
			<ul>
			<li><a href="#">Prev</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">Next</a></li>
			</ul> </div>-->

		<!--daftar testimoni-->	
		</div></div></div>

<?php
	//echo "</div>";
	include_once ('footer.php');
?>