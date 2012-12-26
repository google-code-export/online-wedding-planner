<?php
include('../model/manajemen-gedung.php');
//include_once ('head-back.php');
//echo "<div class='span6 offset1'>";

$obj=new Gedung("localhost","root","","wedding");

if(isset($_REQUEST['id'])){

$obj->detail($_REQUEST['id'],[]);

//print_r($result2->fetch_assoc('id'));
//if($obj->data[''])
echo "<div class='row'>";
        echo "<div <!-- class='span12'-->";       
		    echo "<table class='table table-striped'>";
				echo "<th>#</th>
				<th>Tanggal</th>
				<th>Harga</th>
				<th>Status Gedung</th>
				<th>&nbsp;</th>";
				
foreach($obj->data as $val){
	extract($val);
//print_r($obj);
?>
	
	<tr>
	<td><?php echo $id_detail; ?></td>
	<td><?php echo $tanggal; ?></td>
	<td><?php echo $harga; ?></td>
	<td><?php echo $status; ?></td>
	<td><a href="#.php?id=<?php echo $id; ?>">Pesan</a></td>
	</tr>

<?php
	}
}
?>