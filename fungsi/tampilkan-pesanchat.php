<?php
	date_default_timezone_set("Asia/Jakarta"); //mengeset default date
	include('fungsi_koneksidatabase.php'); // memanggil dan menggunakan fungsi_koneksidatabase.php
	
	$tanggale = date('Ymd');
	$tampilkan = "select * from data_chat where tanggal='$tanggale' order by id asc"; //memilih database dari tabel data_chat yang memiliki tanggal pada hari ini jadi list dibawah akan diurutkan berdasarkan tanggal hari ini
	$qod=mysql_query($tampilkan); 
	while($dri=mysql_fetch_array($qod)){ //array
?>
	<div id="isi">
         <div class="isi_username"><i><b>==> <?php echo $dri['username'];?></b></i></div> <!-- menampilkan username yang chatting-->
         <div class="isi_time"> (<?php echo $dri['tanggal'];?>) </div> <!-- menampilkan tanggal chatting -->
         <div class="isi_isi"> - <?php echo $dri['pesan'];?></div> <!-- menampilkan pesan chatting -->
         <div style="clear:both;"></div>
    </div>	
	
<?php
	}
?>


