<?php
	include "fungsi_koneksidatabase.php";
	
	$id = $_GET['id'];
	$hapus = "DELETE FROM data_user WHERE id_user='$id';";
	$queryhapus = mysql_query($hapus);
	if($queryhapus) {
		echo "<script>alert('Data Member Telah Berhasil Dihapus');location.replace('../halaman_admin.php');</script>";
	} else {
		echo "<script>alert('Data Gagal Dihapus');location.replace('../halaman_admin.php');</script>";
	}
?>