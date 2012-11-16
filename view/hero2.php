<?php
session_start();
		if (!isset($_SESSION['user'])){
		header("Location:./view/view-login.php");
		}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The Wedding Planner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../lib/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../lib/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!-- Le fav and touch icons -->

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
				<li class="active"><a href="#">About</a></li>
				<li class="active"><a href="./model/logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>

          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Hello, Wedding Planner!</h1>
		<p>My Wedding Planner smart assistant. Ini adalah prototype dari <i>BackOffice</i></p>
		
        <p><a class="btn btn-primary btn-large"href="./view/hero.php">Add Plan &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div <!-- class="span12"-->       
		    <table class="table table-striped">
				<th>Nama</th>
				<th>Email</th>
				<th>Telp</th>
				<th>Tanggal Pernikahan</th>
				<th>Tanggal Temu WP</th>
				<th>Tempat Temu</th>
				<th>&nbsp;</th>
			<?php 
					
					if (!empty($plan))
					{
						foreach ($plan as $Plan_ID => $planned)
						{
							echo 
							'<tr>
								<td>'.$planned->Nama.'</td>
								<td>'.$planned->Email.'</td>
								<td>'.$planned->Telp.'</td>
								<td>'.$planned->Tgl_Pernikahan.'</td>
								<td>'.$planned->Tgl_Temu_WP.'</td>
								<td>'.$planned->Tempat_Temu.'</td>
								<td><a href="index.php?edit='.$planned->Plan_ID.'" class="btn" rel="tooltip" title="Edit"><i class="icon-edit" ></i></a>  
								
								<a href="index.php?hapus='.$planned->Plan_ID.'" class="btn" rel="tooltip" title="Hapus"><i class="icon-trash" ></i></a></td>
							</tr>';
						}
					}
				?>
			</table>
          
		  </div>
        </div>
		    <div class="pagination pagination-centered">
				<ul>
					<li class="disabled"><a href="#">Prev</a></li>
					<li class="active"><a href="#">1</a></li>
					</ul>
			</div>
		<div class="row">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
		<div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
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