<?php
	$host = "localhost"; //memilih host yang dipakai
	$user = "root"; //username dari phpmyadmin
	$pass = "gapakepassw0rd"; //password dari phpmyadmin
	$db = "tugaschatsister"; //nama database dari phpmyadmin
	
	$koneksinyo = mysql_connect($host,$user,$pass); //mengkoneksikan database
	$milihdb = mysql_select_db($db,$koneksinyo);
?>