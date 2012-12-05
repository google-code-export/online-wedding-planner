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
    <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
    <script src="../lib/js/bootstrap.js"></script>
	</div>
	</center>
	
	<div style="margin: 15px 70px 5px 65px;">
    
		<div class="container-fluid">
		<div class="row-fluid">
		<div class="span4">
		<ul class="nav nav-pills nav-stacked">
			<li> <a href="home.php">Home</a> </li>
			<li class="active"><a href="testimoni.php">Testimoni</a></li>
			<li><a href="#">Promo</a></li>
			<li><a href="aturjadwal.php">Jadwal Pernikahan</a></li>
		
			<form class="navbar-search pull-left">
			<input type="text" class="search-query" placeholder="Search">
			</form> </ul>
			
			
			<a href="pilihgedung.php" class="thumbnail">
			<img src="../lib/img/rencana.png" alt="">
			</a>
		
		</div>
<?php
//include_once('themes/head.php');	
//include_once('../testimoniController.php');
	
	 
?>
<?php
	if(isset($error))
	{
		echo '<div class="alert alert-error" id="alert">Salah ! '.$error.' 
			<button type="button" class="close" data-dismiss="alert" id="close">×</button></div>';
	}
	if(isset($success))
	{
		echo '<div class="alert alert-success">'.$success.'</div>';
	}
	 
		else
		{
	?>		
		<div class="span8">
		<!--tempat testimoni-->
			<center><img src="../lib/img/testimoni_header.png"> </center><br>
			<form class="form-horizontal"method="post" action="#">
			Your Name	: <input type="text" name="nama" id="inputNama" placeholder="Nama">
			Your Email	: <input type="email" name="email" id="inputEmail" placeholder="Email"> </form>
			<center><textarea rows="6" class="span12" input type="text" name="isi_testi" id="inputIsi" placeholder="Isi testimoni...">
			</textarea> </center>
			<button type="submit" name="simpan_testimoni" class="btn pull-right" id="daftar_btn">Submit</button>
			<button type="batal" name="batal" class="btn pull-right" id="batal">Batal</button>			<br>
			<div class="pagination pagination-right">
			<ul>
			<li><a href="#">Prev</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">Next</a></li>
			</ul> </div>

		<!--daftar testimoni-->	
		<div id="testimoniList">
		<table class="table table-striped">

		<thead>
		</thead>
	<?php	
	if($data!=0 )
	{
	foreach($data as $rows)
	{
	
	?> 
  <tbody>
      <tr>
	  	

		<td><ul class="media-list">
		<body body bgcolor="#CCFF33">
		<li class="media">
		<a class="pull-left" href="#">
		<img class="media-object" src="http://placehold.it/64x64">
		</a>
		<div class="media-body">
		<h4 class="media-heading"><?php echo $rows['nama']; ?></h4>
		<?php echo $rows['isi_testi']; ?>
		</td></div></li> </ul> </body>
	  </tr>
	<?php
		}
	}
	else
	{
	?>
		<tr>
			<td colspan="2">Testimoni Tidak Ada</td>
		</tr>
	<?php
	}
	?>
	  <!--<tr>
		<td><ul class="media-list">
		<body body bgcolor="#CCFF33">
		<li class="media">
		<a class="pull-left" href="#">
		<img class="media-object" src="http://placehold.it/64x64">
		</a>
		<div class="media-body">
		<h4 class="media-heading">Media heading</h4>
		tes tes tes
		</div></li> </ul> </td> </body>
	  </tr>
	  <tr>
		<td><ul class="media-list">
		<body body bgcolor="#CCFF33">
		<li class="media">
		<a class="pull-left" href="#">
		<img class="media-object" src="http://placehold.it/64x64">
		</a>
		<div class="media-body">
		<h4 class="media-heading">Media heading</h4>
		tes tes tes
		</div></li> </ul> </td> </body>
	  </tr>-->
  </tbody>
		 </body> </table>
		 </div>

<script type="text/javascript">
	var url;
	{
		$('#testimoniList').show();
		 	 		return false;
	}
</script>
		
		
		<center><img src="../lib/img/adver.png"> <br> <br> </div></center>
		<div style="margin: 15px 70px 5px 65px;">
		<div class="container-fluid">
		<div class="row-fluid">
		<div class="span3">
			<ul class="thumbnails">
			<div class="thumbnail">
			<img src="http://placehold.it/280x160" alt="">
			<h3>Thumbnail label</h3>
			<p>Thumbnail caption...</p>
			</div> </ul>
		</div>
		<div class="span3">
			<ul class="thumbnails">
			<div class="thumbnail">
			<img src="http://placehold.it/280x160" alt="">
			<h3>Thumbnail label</h3>
			<p>Thumbnail caption...</p>
			</div> </ul>
		</div>
		<div class="span3">
			<ul class="thumbnails">
			<div class="thumbnail">
			<img src="http://placehold.it/280x160" alt="">
			<h3>Thumbnail label</h3>
			<p>Thumbnail caption...</p>
			</div> </ul>
		</div>
		<div class="span3">
			<ul class="thumbnails">
			<div class="thumbnail">
			<img src="http://placehold.it/280x160" alt="">
			<h3>Thumbnail label</h3>
			<p>Thumbnail caption...</p>
			</div> </ul>
		</div>
		
		</div></div></div>
		
		<div style="margin: 10px 10px 0px 10px;">
	<div id="footer"> <img src="../lib/img/footer.png">
	<ul class="nav nav-pills">
    <li><a href="#">Home</a> </li>
  <li><a href="#">Profil Perencana Pernikahan</a></li>
  <li><a href="#">Peta Kantor</a></li>
</ul>
<img src="../lib/img/footer.png">

<?php
	}
?>