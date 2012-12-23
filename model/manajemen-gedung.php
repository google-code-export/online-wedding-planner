<?php
//include('pagination.php'); 
class Gedung{
	
	public $mysqli;
	public $data;
	public function __construct($host,$username,$password,$db_name){
		
		$this->mysqli = new mysqli($host, $username, $password, $db_name);
		if(mysqli_connect_errno()) {
			echo "Error: Could not connect to database.";
		exit;
		}
		/*else{
			echo"Your Database successfully connected";	
		}*/
				
	}
	
	public function __destruct(){
		$this->mysqli->close();	
	}
	
	public function daftar(){
		
		$query="SELECT gedung.id_gedung, gedung.nama_gedung, kota.nama_kota, gedung.deskripsi_gedung, gedung.gambar_gedung
				FROM gedung
				INNER JOIN kota ON kota.id_kota = gedung.id_kota
				WHERE gedung.flag=1
				ORDER BY gedung.id_gedung
				LIMIT 0 , 30";
				
		$result= $this->mysqli->query($query);
		
		$num_result=$result->num_rows;
			
		if($num_result>0){
			while($rows=$result->fetch_assoc()){
								
				$this->data[]=$rows;
				
				//print_r($rows);
			}		
			return $this->data;
		}	
	}
	
	public function daftarSatu($id){
		
		$query="SELECT * FROM gedung where id_gedung='$id'";
		$result= $this->mysqli->query($query);
		
		//$num_result=$result->num_rows;
			
		if($result){
			while($rows=$result->fetch_assoc()){
								
				$this->data[]=$rows;
				
				//print_r($rows);
			}		
			return $this->data;
			//header('location:../view/view-gedung.php');
		}	
	}
	public function tambah($nama,$kota,$deskripsi,$gambar){
		
		$query="INSERT INTO gedung SET nama_gedung='$name', id_kota='$kota', deskripsi_gedung='$deskripsi', gambar_gedung='$gambar'";
		
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Data cannot inserted");
		
		if($result){
			header('location:../view/view-gedung.php');	
		}
	}
	
	public function ubah($id,$nama,$kota,$deskripsi,$gambar){
		
		$query="UPDATE gedung SET nama_gedung='$nama', id_kota='$kota', deskripsi_gedung='$deskripsi', gambar_gedung='$gambar' 
		WHERE id_gedung='$id'";
		
		$result= $this->mysqli->query($query);
		
		if($result){
			echo 'benar';
			//header('location:../view/view-gedung.php');	
		}
		else {echo 'salah';}
		
	}
	
	public function hapus($id){
		
		$query="UPDATE gedung SET flag=0 WHERE id_gedung='$id'";
		
		$result= $this->mysqli->query($query);
		
		if($result){
			echo 'hapus';
			header('location:../view/view-gedung.php');	
		}
		else {echo 'salah';}
		
		
	}
	
	public function status($id){
		
		$query="SELECT id_gedung, id_status, harga FROM gedung-detail WHERE id_status='$id'";
		
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Data cannot inserted");
		
		if($result){
			while($rows=$result->fetch_assoc()){
								
				$this->data[]=$rows;
				
				//print_r($rows);
			}		
			return $this->data;
			//header('location:../view/view-gedung.php');
		}
		//else {echo 'salah';}
		
		
	}
	
}


//$obj=new Gedung("localhost","root","","wedding");

//$obj->daftar();


?>