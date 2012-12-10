<?php
include_once ('header.php');
echo "<div class='span8'>";
?>

<!DOCTYPE html>
<html>
		<!--tempat testimoni-->
			<center><img src="../lib/img/testimoni_header.png"> </center><br>
			<div class='span10'>
			<form class="form-horizontal"method="post" action="../model/control-testimoni">
			<input type='hidden' name='form_testimoni'>
			Your Name	: <input type="text" name="nama" id="inputNama" placeholder="Nama">
			Your Email	: <input type="email" name="email" id="inputEmail" placeholder="Email"> </form>
			<center><textarea rows="6" class="span12" input type="text" name="isi_testi" id="inputIsi" placeholder="Isi testimoni...">
			</textarea> </center>
			<button type="submit" name="simpan_testimoni" class="btn pull-right" id="daftar_btn">Submit</button>
			</div>
			<br>
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

		<div id="testimoniList">
		<table class="table table-striped">

	<?php	
	if($testi!=null){
	foreach($testi as $rows){
			
			$content = $testimoni->list_content($rows['testi_id'],$rows['nama'],$rows['isi_testi']);
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
		 </table>
		 </div></div></div></div>
		

<?php
	include_once ('footer.php');
?>