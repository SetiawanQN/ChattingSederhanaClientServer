<?php
	session_start();
	include "fungsi_koneksidatabase.php";
	
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$dpass = md5($pass);
	
	$tampil = "SELECT * FROM admin WHERE username='$user' AND password='$dpass';";
	$querytampil = mysql_query($tampil);
	$jum = mysql_num_rows($querytampil);
	if($jum>0) {
		$_SESSION['administrator'] = $user;
		echo "<script>location.replace('../halaman_admin.php');</script>";
	} else {
		echo "<script>alert('Maaf Kombinasi Username dan Password Anda Salah!');location.replace('../index.php');</script>";
	}
?>