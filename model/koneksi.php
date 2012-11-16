<?php
class Koneksi {
	function con(){
		$connect = mysql_connect('localhost', 'root', '');
		if (!$connect) {
			die('Could not connect: ' . mysql_error());
			echo 'failed';
		}
		$dbselect = mysql_select_db('wedding');
		return $dbselect;
	}
	}