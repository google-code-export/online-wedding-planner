<?php
	include_once('model/login.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Online Wedding Planner</title>

    <!-- Le styles -->
    <link href="../lib/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 20px;
      }
	  .form-signin {
        max-width: 300px;
        padding: 20px 29px 29px;
        margin: 0 auto 20px;
        background-color: #f5f5f5;
        
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>
    <link href="../lib/css/bootstrap-responsive.css" rel="stylesheet">

  </head>
<body>
  
	<div class="container">
	<div class='span7'>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Online Wedding Planner!</h1>
		<p>My Wedding Planner smart assistant. Ini adalah <i>BackOffice</i></p>
		</div>
		<blockquote>
		<p>Terima kasih telah berbagi kebahagiaan bersama kami.</p>
		<small>&copy; Wedding Planner 2012</small>
		</blockquote>
      </div>
	 <div class='span4' id='login'>
		<?php
		if(isset($error_login))
			{
				echo '<div class="alert alert-error" id="alert">
				<button type="button" class="close" data-dismiss="alert" id="close">x</button>'
				.$error_login.'
				</div>';
			}
			if(!isset($_SESSION['login'])){
				session_start();
			}
			if(isset($_SESSION['login'])){
				echo "<div id=\"sudah_login\">
					Selamat Datang, ".$_SESSION['name']." || <a href=\"logout.php\">Logout</a></div>";
			}
			else
			{
			?>
		<!--Login dengan email: aa@mail.com, pass: abc-->
		<form class="form-signin" action='#' method='post'>
			
			<center><h3 class="form-signin-heading">Administrator</h3>
			<h4 class="form-signin-heading">Please Sign In</h4></center><br>
			<input type='hidden' name='login_form'/>
			<input type="email" class="input-block-level" placeholder="Email address" name='Email'/>
			<input type="password" class="input-block-level" placeholder="Password" name='Pass'/>
			<button class="btn btn-large btn-primary" type="submit" name='login'>Sign in</button>
		
		</form>
		<?php } ?>
	</div>
	</div>


   </div> <!-- /container -->
</body>