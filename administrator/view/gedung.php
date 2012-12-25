<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="../../lib/css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../../lib/js/bootstrap.js"></script>
  
	<div style="margin: 30px 50px 5px 50px;">
	 <center><h1>Administrator</h1></center>
	 <br/>
	 <br/>
	<div class="container-fluid">
  <div class="row-fluid">
    <div class="span3" style="background-color:#FFFFCC">
		<ul class="nav nav-pills nav-stacked">
  		<li class="active"> <a href="gedun.php">Manajemen Gedung </a></li>
  		<li> <a href="#"> Manajemen Etnik </a></li>
  		<li> <a href="#">Manajemen Paket </a></li>
		<li> <a href="#">Manajemen Pilihan</a> </li>
		<li> <a href="#">Manajemen Pertemuan </a> </li>
		<li> <a href="#">Manajemen Promo </a> </li>
		<li> <a href="#">Manajemen User </a> </li>
		
		</ul>
     
    </div>
	
	
    <div class="span8" style="background-color:#FFFF33">
	<div class="container">
	<div style="margin:15px 15px 15px 15px">
	<h4>Tambah Gedung </h4> <br/> 
		<form class="form-horizontal">
  		<div class="control-group">
    	<label class="control-label" for="#">Nama Gedung</label>
    	<div class="controls">
      	<input type="text" id="#" placeholder=""> </div> </div>
		
		
		<div class="control-group">
    	<label class="control-label" for="#">Alamat</label>
    	<div class="controls">
     	<textarea rows="3" input type="#" id="#" placeholder="#"> </textarea> </div> </div>
		
		<div class="control-group">
    	<label class="control-label" for="#">Kota</label>
    	<div class="controls">
		<div class="btn-group">
  		<a class="btn dropdown-toggle" data-toggle="dropdown" href="#" class="span3">
   		Pilih Kota
    	<span class="caret"></span>
 		 </a>
     	<ul class="dropdown-menu">
 		 <li><a tabindex="-1" href="#">Kota 1</a></li>
 		 <li><a tabindex="-1" href="#">Kota 2</a></li>
 		 <li><a tabindex="-1" href="#">Kota 3</a></li> </ul> </div> </div> <br>
		
		<div class="control-group">
    	<label class="control-label" for="#">Deskripsi</label>
    	<div class="controls">
     	<textarea rows="3" input type="#" id="#" placeholder="#"> </textarea> </div> </div>
		
		<div class="control-group">
    	<label class="control-label" for="#">Gambar</label>
    	<div class="controls">
     	<input class="input-large" type="text" placeholder="">
		 <button class="btn" type="button">Browse</button> </div> </div> <br>
		 
		 <div class="control-group">
		 <div style="margin-left:200px" button type="batal" name="batal" class="btn btn-primary" id="batal">Submit</button>
    	<div class="controls">
		  </div> </div>
		
    	
  		
    </div>
  </div>
	
    </div>
  </div>
</div>
	
	
  </body>
</html>