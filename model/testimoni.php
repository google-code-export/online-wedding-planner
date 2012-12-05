<?php
//include_once('libs/class.database.php');

class Testimoni
{
	public $link;
	
	function __construct()
	{
		$konek = new Database();
		$this->link=$konek->connect();
	}
	
	function createTestimoni($username, $tentang, $isi_testi, $waktu)
	{
		$date_created=date('Y-m-d');
		
		$query=$this->link->prepare("INSERT INTO testimoni(nama, tentang, isi_testi, waktu_posting)
			VALUES( ?,?,?,?)");
		$data=array($username, $tentang, $isi_testi, $waktu);
		$query->execute($data);
		$jml_row=$query->rowCount();
		return $jml_row;
	}
	
	 
	
	function getAllTestimoni()
	{
		$query=$this->link->query("SELECT * FROM testimoni ORDER BY waktu_posting ASC");
		$jml_data=$query->rowCount();
		if($jml_data>=1)
		{
			$hasil=$query->fetchAll();
			return $hasil;
			
		}
		else
		{
			return $jml_data;
		}
	}
	
	function getTestimoniByUsername($id_username)
	{
		$query=$this->link->query("SELECT * FROM testimoni WHERE id_username='$id_username' ORDER BY waktu_posting DESC");
		$jml_data=$query->rowCount();
		if($jml_data>=1)
		{
			$hasil=$query->fetchAll();
			return $hasil;
		}
		else
		{
			return $jml_data;
		}
	}
	
	
	function updateTestimoni($tentang, $isi_testi)
	{
		$query=$this->link->query("UPDATE testimoni SET   tentang='$tentang', isi_testi='$isi_testi' WHERE kd_testimoni='$kd_testimoni'");
		$hasil=$query->rowCount();
		return $hasil;
	}
}

?>
