<?php
	session_start();
	include('fungsi/fungsi_koneksidatabase.php'); //memanggil fungsi koneksi database agar dapat digunakan pada operas dibawah
	
	$user = $_SESSION['username']; // mengambil session dari user yang sedang login tadi
	$update = "update data_user set status='off' where username='$user'"; // lalu melakukan set status dari yang tadinya on menjadi off
	$q=mysql_query($update);
	session_destroy();
	
	header('location:index.php'); // kembali diarahkan kehalaman awal atau index.html
?>