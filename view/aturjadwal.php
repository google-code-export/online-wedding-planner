<!DOCTYPE html>
<html>
  <head>
    <title>Online Wedding Planner</title>
    <!-- Bootstrap -->
    <link href="../lib/css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  
  <body>
	<center>
	<body body bgcolor="f8f5fa">
	<div style="margin: 10px 10px 0px 10px;">
	<div id="header"> <img src="../lib/img/owp_header.png">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../lib/js/bootstrap.js"></script>
	</div>
	</center>
	
	<div style="margin: 15px 70px 5px 65px;">
    
		<div class="container-fluid">
		<div class="row-fluid">
		<div class="span4">
		<ul class="nav nav-pills nav-stacked">
			<li> <a href="home.php">Home</a> </li>
			<li><a href="testimoni.php">Testimoni</a></li>
			<li><a href="#">Promo</a></li>
			<li class="active"><a href="aturjadwal.php">Jadwal Pernikahan</a></li>
		
			<form class="navbar-search pull-left">
			<input type="text" class="search-query" placeholder="Search">
			</form> </ul>
			
			<a href="pilihgedung.php" class="thumbnail">
			<img src="../lib/img/rencana.png" alt="">
			</a>
		
		</div>
		
		<div class="span8">
		<!--form atur jadwal-->
			<center><img src="../lib/img/testimoni_header.png"> </center><br>
			<form class="form-horizontal"method="post" action="../model/atur.php">
			<tr>
				<input type="hidden" name="form_jadwal">
				<td>&nbsp;</td>
				<td>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
				<input type="hidden" name="form_jadwal">
				<input type="text" id="inputEmail" placeholder="Email" name='Email'>
				</div>
				</div>
				</td>
				
				<td>
				<div class="control-group">
				<label class="control-label" for="inputNama">Nama</label>
				<div class="controls">
				<input type="text" id="inputNama" placeholder="Nama" name='Nama'>
				</div>
				</div>
				</td>
				
				<td>
				<div class="control-group">
				<label class="control-label" for="inputTelp">Telp</label>
				<div class="controls">
				<input type="number" id="inputTelp" placeholder="Telp" name='Telp'>
				</div>
				</div>
				</td>
				
				<td>
				<div class="control-group">
				<label class="control-label" for="Tgl_Pernikahan">Tanggal Pernikahan</label>
				<div class="controls">
				<input type="datetime" id="Tgl_Pernikahan" placeholder="Tanggal Pernikahan" name='Tgl_Pernikahan'>
				</div>
				</div>
				</td>
				
				<td>
				<div class="control-group">
				<label class="control-label" for="Tgl_Temu_WP">Tanggal Temu WP</label>
				<div class="controls">
				<input type="datetime" id="Tgl_Temu_WP" placeholder="Tanggal Temu WP" name='Tgl_Temu_WP'>
				</div>
				</div>
				</td>
				
				<td>
				<div class="control-group">
				<label class="control-label" for="Tempat_Temu">Tempat Temu</label>
				<div class="controls">
				<input type="datetime" id="Tempat_Temu" placeholder="Tempat Temu" name='Tempat_Temu'>
				</div>
				</div>
				</td>
				
				<td>
				<div class="control-group">
				<div class="controls">
				<button type="submit" class="btn">Submit</button>
				</div>
				</div>
				</td>
				
			</form>
			</body>
		
		</div>
		</div>
		</div>