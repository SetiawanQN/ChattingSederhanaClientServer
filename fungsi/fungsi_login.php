<?php
	session_start();
	include "fungsi_koneksidatabase.php"; //memanggil dan memakai fungsi_koneksidatabase
	
	$user = $_POST['username'];  //user = inputan username dari masukan
	$pass = $_POST['password']; //pass = inputan password dari masukan
	$dpass = md5($pass); //passwordnya disini nanti akan dienkripsi menjadi md5
	
	$tampilkan = "SELECT * FROM data_user WHERE username='$user' AND password='$pass';"; //mengambil data tabel data_user dimana username dan password yang dimasukkan benar 
	$queryproses = mysql_query($tampilkan); //membuat variabel queri
	$jumlahnyo = mysql_num_rows($queryproses); //menghitung queri berdasarkan baris dari tabel
	if($jumlahnyo>0) { // jika jumlah baris dengan queri yang sama lebih dari 0 maka :
		$q2="update data_user set status='on' where username='$user' and password='$pass'"; //merubah data user dari yang tadinya off ke on sebagai penanda bahwa dia sudah login
		$h2=mysql_query($q2);
		$_SESSION['username'] = $user;
		header( "Location:../member_chat.php"); //diredirecr ke halaman member_chat.php
	} else {
		echo "<script>alert('Kombinasi Username dan Password Anda Salah Lho.. :p');location.replace('../index.php');</script>"; //jika tidak maka akan di redirect ke halaman index
		
	}
?>