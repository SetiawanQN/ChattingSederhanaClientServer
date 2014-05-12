<?php
	session_start();
	include "fungsi_koneksidatabase.php"; // Memanggil dan menggunakan fungsi_koneksidatabse.php
	
	$nama = $_POST['namacalonmember']; // nama =  mengambil inputan dari namacalonmember
	$user = $_POST['usercalonmember']; // user = mengambil inputan dari usercalonmember
	$pass = $_POST['passwordcalonmember']; // password = mengambil inputan dari passwordcalonmember
	$enkpass = md5($pass); // password dienkripsi menggunakan md5
	
	$cek = "SELECT * FROM data_user WHERE username='$user'"; // mengambil data pada tabel data_user
	$qcek = mysql_query($cek); // mengecek jumlan kueri
	$jum = mysql_num_rows($qcek); // mengecek jumlah kueri berdasarkan baris tabel
	if($jum>0) { // jika terdapat lebih dari 1 baris dengan username yang sama maka akan muncul alert dibawah ini.. dan akan diredirect ke halaman pendaftaran_member
		echo "<script>alert('Username dengan nama ini sudah terdaftar, coba dengan username lainya');location.replace('../pendaftaran_member.php');</script>"; 
	} else { //jika tidak
		$tambah = "INSERT INTO data_user VALUES(null,'$nama','$user','$pass','off');"; //memasukkan data inputan tadi kedalam database tabel data_user
		$tambahquery = mysql_query($tambah);
		if($tambah) {
			echo "<script>alert('Pendaftaran akun berhasil, silahkan login dengan username dan password anda !');location.replace('../index.php');</script>"; //pemberitahuan jika penambahan member berhasil dan diredirect ke halaman index.php
		} else {
			echo "<script>alert('Maaf, Pendaftaran Gagal.');location.replace('../pendaftaran_member.php');</script>"; //pemberitahuan jika penambahan member gagal dan diredirect kehalaman pendaftaran_member.php
		}
	}
	
?>