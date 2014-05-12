<?php
	session_start();
	include "fungsi_koneksidatabase.php";
	
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$user = $_POST['username'];
	$pass = $_POST['pass'];
	
	$cek = "SELECT * FROM data_user WHERE username='$user'";
	$qcek = mysql_query($cek);
	$jum = mysql_num_rows($qcek);
	if($jum>0) {
		echo "<script>alert('Username Yang Anda Gunakan Sudah Terdaftar!');location.replace('../halaman_admin.php');</script>";
	} else {
		$ganti = "UPDATE data_user SET nama='$nama', username='$user', password='$pass' WHERE id_user='$id'";
		$qganti = mysql_query($ganti);
		if($qganti) {
			echo "<script>alert('Data Member Berhasil Diupdate');location.replace('../halaman_admin.php');</script>";
		} else {
			echo "<script>alert('Data Member Gagal Diupdate');location.replace('../halaman_admin.php');</script>";
		}
	}
?>