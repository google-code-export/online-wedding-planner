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
	
	//tampilkan semua gedung
	public function daftar(){
		
		$query="SELECT g.id_gedung, g.nama_gedung, g.deskripsi_gedung, g.gambar_gedung, g.kapasitas, k.nama_kota
		FROM gedung g
		JOIN kota k ON k.id_kota = g.id_kota
		WHERE g.flag =1
		ORDER BY g.id_gedung";
				
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
	
	//tampilkan satu gedung
	public function daftarSatu($id){
		
		$query="SELECT g.id_gedung, g.nama_gedung, k.nama_kota, k.id_kota, g.deskripsi_gedung, g.gambar_gedung, g.kapasitas
		FROM gedung g
		JOIN kota k ON g.id_kota=k.id_kota
		WHERE id_gedung ='$id'
		ORDER BY g.id_gedung";

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
	
	//tampilkan detail dari satu gedung
	public function detail($id){
		
		//$query1="SELECT nama_gedung, gambar_gedung, deskripsi_gedung FROM gedung WHERE id_gedung ='$id' LIMIT 0 , 30";
		
		$query="SELECT d.id_detail, g.nama_gedung, g.gambar_gedung, g.deskripsi_gedung, d.tanggal, d.harga, s.status
		FROM gedung_detail d
		JOIN gedung g ON g.id_gedung = d.id_gedung
		JOIN STATUS s ON s.id_status = d.id_status
		WHERE g.id_gedung ='$id' && d.flag = 1
		ORDER BY d.id_detail
		LIMIT 0 , 30";
		$result= $this->mysqli->query($query);	
		
		$query2="SELECT distinct g.nama_gedung 
		from gedung g
		join gedung_detail d ON g.id_gedung = d.id_gedung
		where g.id_gedung ='$id'";
		$result2=$this->mysqli->query($query2);
		//$nama=$result2->fetch_assoc();
		$a=$result2->fetch_assoc();
		echo "<h3>".$a['nama_gedung']."</h3>";
		
		if($result){
			while($rows=$result->fetch_assoc()){
								
				$this->data[]=$rows;
				//print_r($rows['id_gedung']);
				
			}		
			return $this->data;
			
			//header('location:../view/view-gedung.php');
		}
	}
	
	//tampilkan form tambah gedung, masukkan input ke db
	public function tambah($nama_gedung,$id_kota,$deskripsi_gedung, $kapasitas){
		
		$gambar = $_FILES['image']['name'];
		
		$query="INSERT INTO `gedung`(`id_gedung`, `nama_gedung`, `id_kota`, `deskripsi_gedung`,`kapasitas`, `gambar_gedung`, `flag`) 
		VALUES('', '$nama_gedung', '$id_kota', '$deskripsi_gedung', '$kapasitas', '$gambar', '1')";
		
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Data cannot inserted");
		
		if($result){
			$success_tambah="Sukses tambah data";
			header('location:../view/view-gedung.php');
			//$gambar = $_FILES['image']['name'];
			//echo "$gambar";
		}
	}
	
	public function ubahSatu($id_gedung){
		
		$query=$this->daftarSatu($id_gedung);
		return $query;
		//print_r($query);
		//$num_result=$result->num_rows;
				
	}
	
	public function ubah($id,$nama_gedung,$id_kota,$deskripsi,$kapasitas){
		
		$gambar = $_FILES['image']['name'];
		
		$query="UPDATE gedung SET nama_gedung='$nama_gedung', id_kota='$id_kota', deskripsi_gedung='$deskripsi', gambar_gedung='$gambar', kapasitas='$kapasitas' 
		WHERE id_gedung='$id'";
		
		$result= $this->mysqli->query($query);
		
		if($result){
			//echo 'benar';
			header('location:../view/view-gedung.php');	
		}
		else {echo 'salah';}
		
	}
	
	public function hapus($id){
		
		$query="UPDATE gedung SET flag=0 WHERE id_gedung='$id'";
		
		$result= $this->mysqli->query($query);
		
		if($result){
			//echo 'hapus';
			header('location:../view/view-gedung.php');	
		}
		else {echo 'salah';}
		
	}
	
	public function hapusDetail($id){
		
		$query="UPDATE gedung_detail SET flag=0 WHERE id_detail='$id'";
		$query2="SELECT * from gedung_detail
		where id_detail ='$id'";
		$result2=$this->mysqli->query($query2);
		//$nama=$result2->fetch_assoc();
		$a=$result2->fetch_assoc();
		$b= $a['id_gedung'];
		
		$result= $this->mysqli->query($query);
		
		if($result){
			//echo 'hapus';
			header("location:../view/view-gedung-detail.php?id=$b");	
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
	public function opsi(){
		
		$query="SELECT * FROM kota";
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."salah");
		//echo "<select>";
		if($result){
			while($rows=$result->fetch_assoc()){
				$this->data[]=$rows;
				//$this->data[]=$rows;
				//echo("<option value='$rows['id_status']'>$rows['status']</option>");
				//print_r($rows);
				//echo "<option>".$rows['status']."</option>";
			}
			return $this->data;
		}
		//echo "</select>";
	}
	
}


//$obj=new Gedung("localhost","root","","wedding");

//$obj->ubahSatu(1);
//echo "$obj()";

?>