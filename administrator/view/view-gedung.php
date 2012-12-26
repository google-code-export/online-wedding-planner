<?php
session_start();
if (!isset($_SESSION['user'])){
header("Location:../index.php");
}

include('../model/manajemen-gedung.php');
include_once ('head-back.php');
echo "<div class='span6 offset1'>";
echo "<center><h3>Daftar Gedung </h3></center>";

?>

<body>
<?php
//view gedung ini untuk back-office

$obj=new Gedung("localhost","root","","wedding");
$obj->daftar();

echo "<div class='row'>";
        echo "<div <!-- class='span12'-->";       
		    echo "<table class='table table-striped'>";
				echo "<th>Gambar Gedung</th>
				<th>Nama Gedung</th>
				<th>Lokasi</th>
				<th>Deskripsi</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>";

//echo "<p><a href='view.php'>View All</a> | <b>View Page:</b> ";
foreach($obj->data as $val){
	extract($val);
	
	?>
    <tr>
    
	<td><?php echo "<img class='img-polaroid' src=../../lib/img/$gambar_gedung width='200' height='200' >" ?></td>
    <td><a href='view-gedung-detail.php?id=<?php echo $id_gedung?>'> <?php echo $nama_gedung; ?></a></td>
    <td><?php echo $nama_kota; ?></td>
    <td><?php echo $deskripsi_gedung; ?></td>
  
	 <td><a href="../model/ubah-gedung.php?id=<?php echo $id_gedung; ?>" class=btn" rel="tooltip" title="Ubah"><i class="icon-pencil" ></i></a></td>
	 <td><a href="../model/hapus-gedung.php?id=<?php echo $id_gedung; ?>" class=btn" rel="tooltip" title="Hapus"><i class="icon-trash" ></i></a></td>

	</tr>
    <?php
	//Echo "<img src=http://www.yoursite.com/images/".$info['photo'] .">
}

?>
</table></div></div>
<ul class='pull-right'>
<a class="btn btn-primary" type="button" href="../view/view-tambah-gedung.php">Tambah Gedung <i class="icon-plus-sign icon-white" ></i></a></button></ul>


</body>
</html>