<?php
	if(isset($_POST['login']))
	{
		session_start();
		include_once('authorisasi.php');
		$user = new Auth();
		$email=$_POST['Email'];
		$password=$_POST['Pass'];
		//$name=[];
		if(empty($email) || empty($password))
		{
			$error_login="Email dan Password tidak boleh kosong";
			session_destroy();
		}
		else
		{
			
			$cek=$user->loginUser($email,$password);
			if($cek==1)
			{
				//header("location: view/view-gedung.php");
				
				$session=$user->getUser($email);
				foreach($session as $userSession)
				{
					$_SESSION['login']=$userSession['user_id'];
					//$_SESSION['level']=$userSession['id_level'];
					if(isset($_SESSION['login']))
					{
						$_SESSION['user']=$userSession['user'];
						header("location: view/view-gedung.php");
					}
				}
				
			}
			else
			{
				$error_login="Login gagal, username atau password salah";
				session_destroy();
			}
		}	
		
	}