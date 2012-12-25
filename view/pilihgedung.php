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
		<div class="span3">
		<center><img src="../lib/img/menubar.png"></center> <br>
		<!--sidebar menu-->
		<ul class="nav nav-pills nav-stacked">
			<li><a href="home.php"><i class="icon-home"></i>  Home</a> </li>
			<li><a href="view-testimoni.php"><i class="icon-comment"></i>  Testimoni</a></li>
			<li><a href="#"><i class="icon-share"></i>  Promo</a></li>
			<li><a href="aturjadwal.php"><i class="icon-calendar"></i>  Jadwal Pernikahan</a></li>
		
			<form class="navbar-search pull-left">
			<input type="text" class="search-query" placeholder="Search">
			<button class="btn btn-primary btn-small" type="submit"><i class="icon-search icon-white"></i></button>
			</form> 
			</ul>
	
		
		</div>
		
		<div class="span8">
		
		<div style="margin: 15px 0px 5px 70px;">
		<ul class="thumbnails">
		<li class="span2">
		<a href="pilihgedung.php" class="thumbnail">
		<img src="../lib/img/ic1.png" alt="">
		  <h6><center>Pilih Gedung</center></h6>
		</a>
		</li>
		
		<li class="span2">
		<a href="pilihetnik.php" class="thumbnail disabled">
		<img src="../lib/img/ic2.png" alt="">
		  <h6><center>Pilih Etnik</center></h6>
		</a>
		</li>
		
		<li class="span2">
		<a href="aturpaket.php" class="thumbnail">
		<img src="../lib/img/ic3.png" alt="">
		  <h6><center>Atur Paket</center></h6>
		</a>
		</li>
		
		<li class="span2">
		<a href="aturjadwal.php" class="thumbnail">
		<img src="../lib/img/ic4.png" alt="">
		  <h6><center>Atur Jadwal</center></h6>
		</a>
		</li>
		
		<li class="span2">
		<a href="pilihetnik.php" class="thumbnail">
		<img src="../lib/img/ic5.png" alt="">
		  <h6><center>Lewati Langkah Ini</center></h6>
		</a>
		</li>
</ul> </div>

		<table border="0" width="100%" cellpadding="0" cellspacing = "0">
		<!--thumbnail pilih gedung-->
			<td width="50%" valign="top">
			<div class="row-fluid">
			<ul class="thumbnails">
			<li class="span11">
			<div class="thumbnail">
			<img src="../lib/img/biofarma.jpg" alt="">
			<h4 align="center">Gedung Biofarma Bandung</h4>
			<!--p align="center">Gedung ini ... Harga Rp. 10 juta</p-->
			<p>
			<!-- Button to trigger modal -->
			<a href="#myModal" role="button" class="btn btn-block" data-toggle="modal">Details</a>
 			<!-- Modal -->
			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 			<div class="modal-header">
   			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    		<h3 id="myModalLabel">Gedung Biofarma Bandung</h3>
  			</div>
  			<div class="modal-body">
    		<p>
			<i class="icon-minus"></i> Jl. Dr. Djundjunan, Bandung <br>
			<i class="icon-minus"></i> Harga sewa : Rp 15.000.000,00 (lima belas juta rupiah) <br>
			<i class="icon-minus"></i> Waktu tersedia : Siang 10.00-14.00 dan Malam 18.00-22.00 <br>
			<i class="icon-minus"></i> Penambahan waktu, charge Rp 1.000.000,00 (satu juta rupiah)/jam <br>
			<i class="icon-minus"></i> Kapasitas 750 orang
			</p>
  			</div>
  			<div class="modal-footer">
    		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
 		 	</div>
			</div>
			<a class="btn btn-block btn-primary" href="./view/hero.php">Pilih</a></p>
			</div>
			</li>
			</ul>
			</div>
			</td>
			
			<td width="50%" valign="top">
			<div class="row-fluid">
			<ul class="thumbnails">
			<li class="span11">
			<div class="thumbnail">
			<img src="../lib/img/suryalaya.jpg" alt="">
			<h4 align="center">Gedung Suryalaya</h4>
			<p>
			<!-- Button to trigger modal -->
			<a href="#myModal" role="button" class="btn btn-block" data-toggle="modal">Details</a>
 			<!-- Modal -->
			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 			<div class="modal-header">
   			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    		<h3 id="myModalLabel">Gedung Suryalaya Bandung</h3>
  			</div>
  			<div class="modal-body">
    		<p>
			<i class="icon-minus"></i> Jln. Suryalaya Indah 1 – 3, Buah Batu Bandung <br>
			<i class="icon-minus"></i> Harga sewa : Senin s/d Jum’at 12.450.000,00 (dua belas juta empat ratus lima puluh ribu rupiah) ---- Sabtu & Minggu 14.950.000,- (
			empat belas juta sembilan ratus lima puluh ribu rupiah <br>
			<i class="icon-minus"></i> Waktu tersedia : Pagi 10.00- 14.00 dan Siang 18.00 – 22.00 <br>
			<i class="icon-minus"></i> Penambahan waktu, charge 10% dari harga sewa gedung <br>
			<i class="icon-minus"></i> Kapasitas 500 orang
			</p>
  			</div>
  			<div class="modal-footer">
    		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
 		 	</div>
			</div>
			<a class="btn btn-block btn-primary" href="./view/hero.php">Pilih</a></p>
			</div>
			</li>
			</ul>
			</div>
			</td>
			
			<table border="0" width="100%" cellpadding="0" cellspacing = "0">
			<td width="50%" valign="top">
			<div class="row-fluid">
			<ul class="thumbnails">
			<li class="span11">
			<div class="thumbnail">
			<img src="../lib/img/gedungpemkot.jpg" alt="">
			<h4 align="center">Gedung Pemkot</h4>
			<p>
			<!-- Button to trigger modal -->
			<a href="#myModal" role="button" class="btn btn-block" data-toggle="modal">Details</a>
 			<!-- Modal -->
			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 			<div class="modal-header">
   			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    		<h3 id="myModalLabel">Gedung Suryalaya Bandung</h3>
  			</div>
  			<div class="modal-body">
    		<p>
			<i class="icon-minus"></i> Jln. Suryalaya Indah 1 – 3, Buah Batu Bandung <br>
			<i class="icon-minus"></i> Harga sewa : Senin s/d Jum’at 12.450.000,00 (dua belas juta empat ratus lima puluh ribu rupiah) ---- Sabtu & Minggu 14.950.000,- (
			empat belas juta sembilan ratus lima puluh ribu rupiah <br>
			<i class="icon-minus"></i> Waktu tersedia : Pagi 10.00- 14.00 dan Siang 18.00 – 22.00 <br>
			<i class="icon-minus"></i> Penambahan waktu, charge 10% dari harga sewa gedung <br>
			<i class="icon-minus"></i> Kapasitas 500 orang
			</p>
  			</div>
  			<div class="modal-footer">
    		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
 		 	</div>
			</div>
			<a class="btn btn-block btn-primary" href="./view/hero.php">Pilih</a></p>
			</div>
			</li>
			</ul>
			</div>
			</td>
			
			<td width="50%" valign="top">
			<div class="row-fluid">
			<ul class="thumbnails">
			<li class="span11">
			<div class="thumbnail">
			<img src="../lib/img/siliwangi.jpg" alt="">
			<h4 align="center">Gedung Siliwangi</h4>
			<p>
			<!-- Button to trigger modal -->
			<a href="#myModal" role="button" class="btn btn-block" data-toggle="modal">Details</a>
 			<!-- Modal -->
			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 			<div class="modal-header">
   			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    		<h3 id="myModalLabel">Gedung Siliwangi Bandung</h3>
  			</div>
  			<div class="modal-body">
    		<p>
			<i class="icon-minus"></i> Jln. Jln. Aceh Bandung (sebelah stadion PERSIB) <br>
			<i class="icon-minus"></i> Harga sewa : Senin s/d Jum’at 12.450.000,00 (dua belas juta empat ratus lima puluh ribu rupiah) ---- Sabtu & Minggu 14.950.000,- (
			empat belas juta sembilan ratus lima puluh ribu rupiah <br>
			<i class="icon-minus"></i> Waktu tersedia : Pagi 10.00- 14.00 dan Siang 18.00 – 22.00 <br>
			<i class="icon-minus"></i> Penambahan waktu, charge 10% dari harga sewa gedung <br>
			<i class="icon-minus"></i> Kapasitas 500 orang
			</p>
  			</div>
  			<div class="modal-footer">
    		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
 		 	</div>
			</div>
			<a class="btn btn-block btn-primary" href="./view/hero.php">Pilih</a></p>
			</div>
			</li>
			</ul>
			</div>
			</td>
			
		</table>
		</table>
	</div>
	
	<?php
include_once ('footer.php');
?>
	
	<!--div style="margin: 10px 10px 0px 10px;">
	<div id="footer"> <img src="../lib/img/footer.png">
	<ul class="nav nav-pills">
    <li><a href="#">Home</a> </li>
  <li><a href="#">Profil Perencana Pernikahan</a></li>
  <li><a href="#">Peta Kantor</a></li>
</ul>
<img src="../lib/img/footer.png">