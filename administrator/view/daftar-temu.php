<?php
session_start();
if (!isset($_SESSION['user'])){
header("Location:../index.php");
}

include('../model/model-daftar-temu.php');
include_once ('head-back.php');
echo "<div class='span6 offset1'>";
echo "<center><h3>Notifikasi Jadwal Temu </h3></center>";
?>

<body>
<?php
$obj=new daftarTemu("localhost","root","","wedding");
$obj->read();

echo "<div class='row'>";
        echo "<div <!-- class='span12'-->";       
		    echo "<table class='table table-striped'>";
				echo "<th>Nama</th>
				<th>Tanggal Pernikahan</th>
				<th>Tanggal Temu WP</th>
				<th>Status</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>";

//echo "<p><a href='view.php'>View All</a> | <b>View Page:</b> ";
foreach($obj->data as $val){
	extract($val);
	
	?>
    <tr>
    <td scope="row"><?php echo $Nama; ?></td>
    <td><center><?php echo $Tgl_Pernikahan; ?></center></td>
    <td><?php echo $Tgl_Temu_WP; ?></td>
    <td><?php echo $status; ?></td>
  
	 <td><a href="../model/proses.php?id=<?php echo $Plan_ID; ?>" class=btn" rel="tooltip" title="Proses"><i class="icon-refresh" ></i></a></td>
	 <td><a href="../model/selesai.php?id=<?php echo $Plan_ID; ?>" class=btn" rel="tooltip" title="Selesai"><i class="icon-thumbs-up" ></i></a></td>
	 <td><a href="../model/hapus.php?id=<?php echo $Plan_ID; ?>" class=btn" rel="tooltip" title="Hapus"><i class="icon-trash" ></i></a></td>

	</tr>
    <?php
}

?>
</table></div></div>
<ul class='pull-right'>
<button class="btn btn-primary" type="button" href="../../view/aturjadwal.php">Tambah Jadwal <i class="icon-plus-sign icon-white" ></i></button></ul>


</body>
</html>