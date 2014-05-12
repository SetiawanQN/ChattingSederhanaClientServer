<?php
	session_start();
	date_default_timezone_set("Asia/Jakarta"); // mengeset date timezone
	include('fungsi_koneksidatabase.php'); // memanggil dan menggunakan fungsi_koneksidatabase.php
	
	$user = $_SESSION['username']; // user = session dari username yang login
	$pesane = $_POST['text']; // pesanchat = merupakan inputan dari text
	$tanggale = date('Ymd'); // date = diambil dari inputan ymd yang didasarkan pada date sekarang
	$tambah = "insert into data_chat values(null,'$user', '$pesane', '$tanggale')"; //menambahkan inputan tadi kedalam data tabel data_chat
	$querytambah = mysql_query($tambah);
?>