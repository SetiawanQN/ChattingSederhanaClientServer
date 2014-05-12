<html><blink><b><i>" Daftar Member Online "</b></i></blink><hr></html>
<?php
	include('fungsi_koneksidatabase.php'); //memanggil dan menggunakan fungsi_koneksidatabase.php
	$q1="select * from data_user where status='on'"; //memilih data dari tabel data_user dimana statusnya adalah on
	$h1=mysql_query($q1);
	while($row=mysql_fetch_array($h1)){
		echo "<div class=isi_usronline><i><b>==> $row[username]</b></i></div>"; //menampilkannya berdasarkan looping array dari kueri
	}
?>