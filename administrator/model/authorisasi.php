<?php
include_once('../model/koneksi.php');

class Auth{

	//public $link;
	
	function __construct()
	{
		$konek = new Koneksi();
		$konek->con();
		//return $this->link;
	}
	function loginUser($email,$password,$name)
	{

		//$password_md5=md5($password);
		$query="select count(*) as jml from auth where email='$email' and pass='$password'";
		$search=mysql_query($query);
		$row=mysql_fetch_assoc($search);
		$baris=$row['jml'];
		//$hasil=$query->rowCount();
		return $baris;
		//print_r ($baris);
	}
	function getUser($email)
	{
		//$query="SELECT count (*) as jml FROM auth WHERE user='$name'";
		$query2="SELECT * from auth where email='$email'";
		//$search=mysql_query($query);
		$search2=mysql_query($query2);
		$hasil=mysql_fetch_assoc($search2);
		$nama=$hasil['user'];
		
		/*
		$row=mysql_fetch_assoc($search);
		$baris=$row['jml'];
		if($baris==1)
		{
			$hasil=$carinama['user'];
			print_r ($hasil);
			//return $hasil;
		}
		else
		{
			return $baris;
		}*/
		//print_r ($nama);
		return $hasil;
	}
}
//$tes= new Auth();
//$tes->getUser('admin');