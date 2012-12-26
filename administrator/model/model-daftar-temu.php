<?php
//include('pagination.php'); 
class daftarTemu{
	
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
	
	public function read(){
		
		$query="SELECT p.Nama, p.Tgl_Pernikahan, p.Tgl_Temu_WP, s.status
		FROM planner p
		JOIN STATUS s ON p.id_status = s.id_status
		ORDER BY s.id_status DESC
		LIMIT 0 , 30";
		$result= $this->mysqli->query($query);
		
		$per_page = 3;
		//$p= new Pagination();
		
		
		$num_result=$result->num_rows;
		//echo $num_result;
		//$total_results = mysql_num_rows($result);
        $total_pages = ceil($num_result / $per_page);
		//echo $total_pages;
		//$arr = $p->calculate_pages($total_pages, 3, 1);

		
				
		if($num_result>0){
			while($rows=$result->fetch_assoc()){
								
				$this->data[]=$rows;
				
				//print_r($rows);
			
				
			}
						
			return $this->data;
		}
		
		
	}
	
	public function insert($name,$email,$address,$mob){
		
		$query="INSERT INTO user SET name='$name', email='$email', address='$address', mob='$mob'";
		
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Data cannot inserted");
		
		if($result){
			header('location:read.php');	
		}
		
		
		
	}
	
	public function proses($id){
		
		$query="UPDATE planner SET id_status=2 WHERE Plan_ID='$id'";
		
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Data cannot inserted");
		
		if($result){
			//echo 'benar';
			header('location:../view/daftar-temu.php');	
		}
		//else {echo 'salah';}
		
	}
	
	public function selesai($id){
		
		$query="UPDATE planner SET id_status=1 WHERE Plan_ID='$id'";
		
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Data cannot inserted");
		
		if($result){
			//echo 'benar';
			header('location:../view/daftar-temu.php');	
		}
		//else {echo 'salah';}
		
	}
	
	public function hapus($id){
		
		$query="DELETE FROM planner WHERE Plan_ID='$id'";
		
		$result= $this->mysqli->query($query) or die(mysqli_connect_errno()."Data cannot inserted");
		
		if($result){
			//echo 'hapus';
			header('location:../view/daftar-temu.php');	
		}
		//else {echo 'salah';}
		
		
	}
	
}


//$obj=new Crud("localhost","root","","wedding");

//$obj->read();


?>