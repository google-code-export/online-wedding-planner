<?php
include_once ('header.php');
echo "<div class='span8'>";
?>

<!DOCTYPE html>
<html>
			<!--form atur jadwal-->
			<center><img src='../lib/img/aturjadwal.png'><br></center>
			<div class='span6 offset2'>
			<center><form class='form-horizontal' method='post' action='../model/atur.php'>
			<tr>
				<input type='hidden' name='form_jadwal'>
				<td>&nbsp;</td>
				<td>
				<div class='control-group'>
				<label class='control-label' for='inputEmail'>Email</label>
				<div class='controls'>
				<input type='hidden' name='form_jadwal'>
				<input type='text' id='inputEmail' placeholder='Email' name='Email'>
				</div>
				</div>
				</td>
				
				<td>
				<div class='control-group'>
				<label class='control-label' for='inputNama'>Nama</label>
				<div class='controls'>
				<input type='text' id='inputNama' placeholder='Nama' name='Nama'>
				</div>
				</div>
				</td>
				
				<td>
				<div class='control-group'>
				<label class='control-label' for='inputTelp'>Telp</label>
				<div class='controls'>
				<input type='number' id='inputTelp' placeholder='Telp' name='Telp'>
				</div>
				</div>
				</td>
				
				<td>
				<div class='control-group'>
				<label class='control-label' for='Tgl_Pernikahan'>Tanggal Pernikahan</label>
				<div class='controls'>
				<input type='datetime' id='Tgl_Pernikahan' placeholder='Tanggal Pernikahan' name='Tgl_Pernikahan'>
				</div>
				</div>
				</td>
				
				<td>
				<div class='control-group'>
				<label class='control-label' for='Tgl_Temu_WP'>Tanggal Temu WP</label>
				<div class='controls'>
				<input type='datetime' id='Tgl_Temu_WP' placeholder='Tanggal Temu WP' name='Tgl_Temu_WP'>
				</div>
				</div>
				</td>
				
				<td>
				<div class='control-group'>
				<label class='control-label' for='Tempat_Temu'>Tempat Temu</label>
				<div class='controls'>
				<input type='datetime' id='Tempat_Temu' placeholder='Tempat Temu' name='Tempat_Temu'>
				</div>
				</div>
				</td>
				
				<td>
				<div class='control-group'>
				<div class='controls'>
				<button type='submit' class='btn'>Submit</button>
				</div>
				</div>
				</td>
				
			</form></div></center>
			</body>
		
		</div>
		<!--End form atur jadwal-->
</div></div></div>
<?php
include_once ('footer.php');
?>