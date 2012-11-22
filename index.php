<!DOCTYPE html>
<html>
  <head>
    <title>Online Wedding Planner<title>
    <!-- Bootstrap -->
	<link href='img/icon.ico' rel='shortcut icon' type='image/x-icon'/>
    <link href="lib/css/bootstrap.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="lib/js/bootstrap.js"></script> </body>
	
	<center><div style="margin: 15px 100px 5px 100px;">
	<img src="lib/img/entersite.png"> <br> <br> <br>
		 <a href="#" class="thumbnail">
      <img src="lib/img/entersite2.png" alt="">
    </a></div>
	
</html>

<?php 
	include_once("control/Control.php");
	$controller = new Control();
	$controller->invoke();
?>

