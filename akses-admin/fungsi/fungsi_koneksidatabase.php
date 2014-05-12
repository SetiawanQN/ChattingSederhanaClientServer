<?php
	$host = "localhost";
	$user = "root";
	$pass = "gapakepassw0rd";
	$db = "tugaschatsister";
	
	$koneksi = mysql_connect($host,$user,$pass);
	$pilihdb = mysql_select_db($db,$koneksi);
?>