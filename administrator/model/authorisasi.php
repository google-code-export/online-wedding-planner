<?php
	include "../../model/koneksi.php";
	class Auth {
	
		public function __construct(){
			session_start();
		}
	
		function login ($email, $pass){
		
			$konek = new Koneksi();
			$konek->con();
		
			$query="select count(*) as jml from auth where email='$email' and pass='$pass'";
			
			$search=mysql_query($query);
			$row=mysql_fetch_assoc($search);
			$baris=$row['jml'];
			
			if ($baris==1){ 
				return true;
				}
				else {
					return false;
				}
		//echo $baris;
		}
		
		function logout (){
		session_destroy();
		header("Location:../index.php");
		}
		
		/*function ceksesion(){
		session_start();
		if (!isset($_SESSION['user'])){
		header("Location:view-login.php");}

		}*/
		public function getUserName(){
			if(isset($_SESSION['user'])){
				return $_SESSION['user'];
			}else{
				return;
			}
		}

	}
	//$tampil= new Auth();
	//$tampil->login("aa@mail.com", "abc");