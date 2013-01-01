<?php
//include('pagination.php'); 
class Pesan {
	
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
	
	//cari detail dari satu gedung, pada suatu tanggal
	public function cari($id_gedung, $tgl){
		
		$query="SELECT * FROM gedung_detail 
		WHERE id_gedung='$id' && tanggal='$tgl'
		";
				
		$result= $this->mysqli->query($query);
			
		if($result){
			while($rows=$result->fetch_assoc()){
								
				$this->data[]=$rows;
				
				//print_r($rows);
			}		
			return $this->data;
		}	
	}
	
	//tampilkan semua gedung
	public function daftar(){
		
		$query="SELECT g.id_gedung, g.nama_gedung, g.deskripsi_gedung, g.gambar_gedung, g.kapasitas, k.nama_kota, g.keterangan, g.waktu, g.alamat
		FROM gedung g
		JOIN kota k ON k.id_kota = g.id_kota
		WHERE g.flag =1
		ORDER BY g.id_gedung";
				
		$result= $this->mysqli->query($query);
		
		$num_result=$result->num_rows;
		/*
		$query2="SELECT DISTINCT tanggal FROM gedung_detail";
		$result2= $this->mysqli->query($query2) or die(mysqli_connect_errno()."salah");
		
		echo "<form method='post' action='#'><div class='well well-small'><center><h5>Pilih tanggal sewa: <SELECT name='tgl'><option> - Pilih tanggal -";
		if($result2){
			while($row=$result2->fetch_assoc()){
				$option="<OPTION name='tgl'>".$row["tanggal"].'</option>';
				echo $option;
  
			}
			echo "</SELECT></h5></center></div>";
		}
		*/
		if($num_result>0){
			while($rows=$result->fetch_assoc()){
								
				$this->data[]=$rows;
				
				//print_r($rows);
			}		
			return $this->data;
		}	
	}
	
	//menampilkan select dropdown pilih tanggal pada form pilih gedung
	public function tanggal(){
		
		$query="SELECT DISTINCT tanggal FROM gedung_detail";
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."salah");

		if($result){
			while($rows=$result->fetch_assoc()){
				$this->data[]=$rows;
				//print_r($rows['id_detail']);
				//print_r($rows['tanggal']);
			}
			return $this->data;
			
		}

	}
	
	
	//menampilkan select dropdown pilih tanggal pada form pilih gedung
	public function detailpesan($id_detail){
		
		$query="SELECT g.nama_gedung, d.tanggal, d.harga, s.status 
				FROM gedung_detail d
				JOIN gedung g ON g.id_gedung=d.id_gedung
				JOIN status s ON s.id_status=d.id_status
				WHERE d.id_detail='$id_detail'";
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."salah");

		if($result){
			while($rows=$result->fetch_assoc()){
				$this->data[]=$rows;
				//print_r($rows['id_detail']);
				//print_r($rows['tanggal']);
			}
			return $this->data;
			
		}

	}
	
	//tampilkan detail dari satu gedung
	public function detail($id){
		
		//$query1="SELECT nama_gedung, gambar_gedung, deskripsi_gedung FROM gedung WHERE id_gedung ='$id' LIMIT 0 , 30";
		
		$query="SELECT d.id_detail, g.id_gedung, g.nama_gedung, g.gambar_gedung, g.deskripsi_gedung, d.tanggal, d.harga, s.id_status, s.status
		FROM gedung_detail d
		JOIN gedung g ON g.id_gedung = d.id_gedung
		JOIN STATUS s ON s.id_status = d.id_status
		WHERE g.id_gedung ='$id' && d.flag = 1
		ORDER BY d.id_status ASC
		LIMIT 0 , 30";
		$result= $this->mysqli->query($query);	
		
		$query2="SELECT distinct g.nama_gedung, g.alamat, g.deskripsi_gedung
		from gedung g
		where g.id_gedung ='$id'";
		$result2=$this->mysqli->query($query2);
		//$nama=$result2->fetch_assoc();
		$a=$result2->fetch_assoc();
		//print_r($a);
		echo "<div class='well'>
			<h4>".$a['nama_gedung']."</h4>
			<h5>".$a['alamat']."</h5>
			<p>".$a['deskripsi_gedung']."</p>
			</div>
			";
		
		if($result){
			while($rows=$result->fetch_assoc()){
								
				$this->data[]=$rows;
				//print_r($rows['id_gedung']);
				//print_r($rows['id_detail']);
				
			}		
			return $this->data;
			
			//header('location:../view/view-gedung.php');
		}
	}
	
	//menampilkan select dropdown pilih etnik pada form pilih gedung
	public function etnik(){
		
		$query="SELECT * FROM etnik";
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."salah");

		if($result){
			while($rows=$result->fetch_assoc()){
				$this->data[]=$rows;
				//print_r($rows['id_detail']);
			}
			return $this->data;
			
		}

	}
	
	//menampilkan select dropdown pilih etnik pada form pilih gedung
	public function paket(){
		
		$query="SELECT * FROM paket";
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."salah");

		if($result){
			while($rows=$result->fetch_assoc()){
				$this->data[]=$rows;
				//print_r($rows['id_detail']);
			}
			return $this->data;
			
		}

	}
	
	//menampilkan id_perpaket dan hargapaket
	public function hargapaket($id_paket, $etnik){
		
		$query="SELECT * FROM paket_detail where id_paket='$id_paket' && id_etnik='$etnik'";
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."salah");

		if($result){
			while($rows=$result->fetch_assoc()){
				$this->data[]=$rows;
				//print_r($rows['id_detail']);
			}
			return $this->data;
			
		} header('location:../view/view-subtotal.php');

	}
	//menampilkan hargasewa gedung aja
	public function hargasewa($id_paket, $etnik){
		
		$query="SELECT * FROM paket_detail where id_paket='$id_paket' && id_etnik='$etnik'";
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."salah");

		if($result){
			while($rows=$result->fetch_assoc()){
				$this->data[]=$rows;
				//print_r($rows['id_detail']);
			}
			return $this->data;
			
		}

	}
	
}

//$coba= new Pesan("localhost","root","","wedding");
//$coba->detail(3);
