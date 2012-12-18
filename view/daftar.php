
<?php
include_once ('head-back.php');
echo "<div class='span6 offset1'>";
echo "<center><h3>Daftar Jadwal Temu </h3></center>";
/* 
	VIEW-PAGINATED.PHP
	Displays all data from 'players' table
	This is a modified version of view.php that includes pagination
*/

	// connect to the database
	include('../model/koneksi.php');
	$konek = new Koneksi();
	$konek->con();
	// number of results to show per page
	$per_page = 5;
	
	// figure out the total pages in the database
	$result = mysql_query("SELECT * FROM planner ORDER BY id_status DESC");
	$total_results = mysql_num_rows($result);
	$total_pages = ceil($total_results / $per_page);

	// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
	if (isset($_GET['page']) && is_numeric($_GET['page']))
	{
		$show_page = $_GET['page'];
		
		// make sure the $show_page value is valid
		if ($show_page > 0 && $show_page <= $total_pages)
		{
			$start = ($show_page -1) * $per_page;
			$end = $start + $per_page; 
		}
		else
		{
			// error - show first set of results
			$start = 0;
			$end = $per_page; 
		}		
	}
	else
	{
		// if page isn't set, show first set of results
		$start = 0;
		$end = $per_page; 
	}
	
	// display pagination
	echo "<div class='pagination pagination-right'> ";
	echo "<ul>";
	for ($i = 1; $i <= $total_pages; $i++)
	{
		echo "<li><a href='daftar.php?page=$i'>$i</a></li> ";
		
	}
	echo "</ul>";
	
	
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
	
	
	// display data in table
	//echo "<table border='1' cellpadding='10'>";
	//echo "<tr> <th>Nama</th> <th>Tanggal Pernikahan</th> <th>Tanggal Temu WP</th> <th>ID_Status</th> <th></th> <th></th> <th></th></tr>";

	// loop through results of database query, displaying them in the table	
	for ($i = $start; $i < $end; $i++)
	{
		// make sure that PHP doesn't try to show results that don't exist
		if ($i == $total_results) { break; }
	
		// echo out the contents of each row into a table
		echo "<tr>";
		//echo '<td>' . mysql_result($result, $i, 'Plan_ID') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'Nama') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'Tgl_Pernikahan') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'Tgl_Temu_WP') . '</td>';
		echo '<td>' . mysql_result($result, $i, 'id_status') . '</td>';
		
		echo '<td><ul><li><a href="../model/proses.php?id=' . mysql_result($result, $i, 'Plan_ID') . '" class=btn" rel="tooltip" title="Proses"><i class="icon-refresh" ></i></a></li></ul></td>';
		echo '<td><ul><li><a href="../model/selesai.php?id=' . mysql_result($result, $i, 'Plan_ID') . '" class=btn" rel="tooltip" title="Selesai"><i class="icon-thumbs-up" ></i></a></li></ul></td>';
		echo '<td><ul><li><a href="../model/hapus.php?id=' . mysql_result($result, $i, 'Plan_ID') . '" class=btn" rel="tooltip" title="Hapus"><i class="icon-trash" ></i></a></li></ul></td>';
		//class="btn" rel="tooltip" title="Hapus"><i class="icon-trash" ></i></a>
		echo "</tr>"; 
	}
	// close table
	echo "</table>";
	// pagination
	
?>
<p><a href="new.php">Add a new record</a></p>

</body>
</html>