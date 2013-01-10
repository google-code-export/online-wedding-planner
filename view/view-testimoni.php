<?php
include_once ('header.php');
echo "<div class='span8 offset1'>";
?>

<!DOCTYPE html>
<html>
		<!--tempat testimoni-->
			<center><img src="../lib/img/testimoni_header.png"> </center><br>
			<div class='span10'>
			<form class="form-horizontal" method="post" action="../model/control-testimoni.php">
			<tr>
			<td>
			  <p>
			  <input type='hidden' name='form_testimoni'>
			Your Name	: 
			<input class="span4" type="text" name="nama" id="inputNama" placeholder="Nama"> 
			Your Email	: 
			    <input class="span4" type="email" name="email" id="inputEmail" placeholder="Email"> 
		      </p>
			  <center>
			  <p>
			    <textarea rows="3" class="span12" input type="text" name="isi_testi" id="inputIsi" placeholder="Isi testimoni..."></textarea>
			  </p>
			  <button type="submit" name="simpan_testimoni" class="btn pull-right" id="daftar_btn">Submit</button>
			</form>
			</div>
			<br>
			<!--<div class="pagination pagination-right">
			<ul>
			<li><a href="#">Prev</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">Next</a></li>
			</ul> </div>-->

		<!--daftar testimoni-->
		<?php

	//include_once('header.php');
	echo "<div class='span8'>";
        // connect to the database
        include('../model/koneksi.php');
		$konek = new Koneksi();
		$konek->con();
		// number of results to show per page
        $per_page = 3;
		
        /* get results from database
        $result = mysql_query("SELECT * FROM testimoni") 
                or die(mysql_error());*/
				
		// figure out the total pages in the database
        $result = mysql_query("SELECT * FROM testimoni ORDER BY testi_id DESC");
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
        
        echo "<div class='pagination pagination-center'> ";
		echo "<b>Halaman</b>";
		echo "<br>";
		echo "<ul>";
        for ($i = 1; $i <= $total_pages; $i++)
        {
                echo "<li><a href='view-testimoni.php?page=$i'>$i</a></li> ";
				//echo "<a href='test.php?page=$i'>$i</a> ";
        }
        echo "</ul>";
		echo "</div>";
                
        // loop through results of database query, displaying them in the table 
        for ($i = $start; $i < $end; $i++)
        {
                // make sure that PHP doesn't try to show results that don't exist
                if ($i == $total_results) { break; }
        
                // echo out the contents of each row into a table
                echo "<tr>";
				echo "<td><ul class='media-list'><body body bgcolor='#CCFF33'><li class='media'>";
				echo "<a class='pull-left' href='#'><img class='media-object' src='../lib/img/64.png'></a>";
				
				echo "<div class='media-body'>";
                //echo '<td>' . mysql_result($result, $i, 'testi_id') . '</td>';
                echo '<h4 class="media-heading">' . mysql_result($result, $i, 'nama') . '</h4>';
                echo '<td>' . mysql_result($result, $i, 'isi_testi') . '</td>';
                //echo '<td><a href="edit.php?id=' . mysql_result($result, $i, 'testi_id') . '">Edit</a></td>';
                //echo '<td><a href="delete.php?id=' . mysql_result($result, $i, 'testi_id') . '">Delete</a></td>';
                echo "</div> </li></body></ul></td></tr>"; 
        }

        // close table>
        //echo "</table>";
?>
		
		</div></div></div>
		
<?php
	//echo "</div>";
	include_once ('footer.php');
?>