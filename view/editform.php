<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The Wedding Planner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">5210105001</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>Atur jadwal temu dengan klien.</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span12">
            <form class="form-horizontal"method="post" action="./index.php?no=<?php echo $plan->Plan_ID?>">
			<tr>
				<td>&nbsp;</td>
				<td>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
				<input type="text" id="inputEmail" placeholder="Email" name='Email' value='<?php echo $plan->Email?>'>
				</div>
				</div>
				</td>
				
				
				<td>
				<div class="control-group">
				<label class="control-label" for="inputNama">Nama</label>
				<div class="controls">
				<input type="text" id="inputNama" placeholder="Nama" name='Nama'value='<?php echo $plan->Nama?>'>
				</div>
				</div>
				</td>
				
				<td>
				<div class="control-group">
				<label class="control-label" for="inputTelp">Telp</label>
				<div class="controls">
				<input type="number" id="inputTelp" placeholder="Telp" name='Telp'value='<?php echo $plan->Telp?>'>
				</div>
				</div>
				</td>
				
				<td>
				<div class="control-group">
				<label class="control-label" for="Tgl_Pernikahan">Tanggal Pernikahan</label>
				<div class="controls">
				<input type="datetime" id="Tgl_Pernikahan" placeholder="Tanggal Pernikahan" name='Tgl_Pernikahan'value='<?php echo $plan->Tgl_Pernikahan?>'>
				</div>
				</div>
				</td>
				
				<td>
				<div class="control-group">
				<label class="control-label" for="Tgl_Temu_WP">Tanggal Temu WP</label>
				<div class="controls">
				<input type="datetime" id="Tgl_Temu_WP" placeholder="Tanggal Temu WP" name='Tgl_Temu_WP'value='<?php echo $plan->Tgl_Temu_WP?>'>
				</div>
				</div>
				</td>
				
				<td>
				<div class="control-group">
				<label class="control-label" for="Tempat_Temu">Tempat Temu</label>
				<div class="controls">
				<input type="datetime" id="Tempat_Temu" placeholder="Tanggal Temu WP" name='Tempat_Temu'value='<?php echo $plan->Tempat_Temu?>'>
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
          
		</div>
		</div>
        

      <hr>

      <footer>
        <blockquote>
		<p>Terima kasih telah berbagi kebahagiaan bersama kami.</p>
		<small>&copy; Wedding Planner 2012</small>
		</blockquote>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>