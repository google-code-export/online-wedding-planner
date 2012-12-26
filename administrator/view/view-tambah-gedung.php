<?php
include('../model/manajemen-gedung.php');
include_once ('head-back.php');
echo "<div class='span6 offset1'>";

if(isset($_REQUEST['submit'])){
	$obj=new Gedung("localhost","root","","crud");
	extract($_REQUEST);
	
	$obj->tambah($nama,$kota,$deskripsi,$gambar);
	
}

?>
<!DOCTYPE html>
<html>

    <div class="span8">
	<center><h4>Tambah Gedung </h4></center>
	<div class="container">
	<div style="margin:15px 15px 15px 15px">
		
		<form class="form-horizontal" method='post' action='view-tambah-gedung.php'>
  		<div class="control-group">
    	<label class="control-label" for="#">Nama Gedung</label>
    	<div class="controls">
      	<input type="text" id="#" placeholder="Nama Gedung" name='nama_gedung'> </div> </div>
		
		
		<div class="control-group">
    	<label class="control-label" for="#">Alamat</label>
    	<div class="controls">
     	<textarea rows="3" input type="#" id="#" placeholder=""> </textarea> </div> </div>
		
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
		<!--End form atur jadwal-->