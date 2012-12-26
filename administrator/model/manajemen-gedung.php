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
		
		$query="SELECT * FROM gedung WHERE id_gedung ='$id'";

		$result= $this->mysqli->query($query);	
		
		if($result){
			while($rows=$result->fetch_assoc()){
								
				$this->data[]=$rows;
				
				//print_r($rows);
			}		
			return $this->data;
			//header('location:../view/view-gedung.php');
		}	
	}
	
	public function detail($id, $detail){
		
		//$query1="SELECT nama_gedung, gambar_gedung, deskripsi_gedung FROM gedung WHERE id_gedung ='$id' LIMIT 0 , 30";
		
		$query="SELECT g.nama_gedung, g.gambar_gedung, g.deskripsi_gedung, d.tanggal, d.harga, s.status
		FROM gedung_detail d
		JOIN gedung g ON g.id_gedung = d.id_gedung
		JOIN STATUS s ON s.id_status = d.id_status
		WHERE g.id_gedung ='$id'
		ORDER BY d.id_detail
		LIMIT 0 , 30";
		$result= $this->mysqli->query($query);	
		
		$query2="SELECT distinct g.nama_gedung 
		from gedung g
		join gedung_detail d ON g.id_gedung = d.id_gedung
		where g.id_gedung ='$id'";
		$result2=$this->mysqli->query($query2);
		
		//print_r($result2->fetch_assoc());
		
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

//$obj->detail(1,[]);


?>