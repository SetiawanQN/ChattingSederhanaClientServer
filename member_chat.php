<?php
	include "fungsi/fungsi_ceksession.php"; // memanggil dan menjalankan fungsi_ceksession.php pada direktori fungsi
?>
<html>
	<head>
		<title>Tugas SISTER Chatting</title> <!-- Menampilkan judul -->
		<link href="css/style.css" rel="stylesheet" type="text/css"> <!--Memanggil file css-->
		<link href="css/style-chat.css" rel="stylesheet" type="text/css"> <!--Memanggil file css untuk tampilan chatting-->
		<script type='text/javascript' src="js/jquery.min.js"></script> <!--Memanggil file javascript-->
	</head>
	<body>
		<div class="container_16 warna1"> <!-- membagi container paling atas dimana sebagai lokasi banner-->
				<div class="grid_8 brand"><img src="images/headeruser.png"></div> <!-- Untuk menampilkan banner dengan logo dan nama -->
				<div class="grid_8 login-box"><a href='logout_chatmember.php'><img src="images/logout-member.png"></a></div> <!-- Untuk menampilkan icon logout dan mengarahkannya pada halaman logout_chatmember.php sebagai operasi logic -->
		</div>
		<div class="container_16 warna"> <!-- membagi container tengah dengan template grid dimana sebagai isi nantinya-->
	<div id="wrapper">
	   <div id="navbar"><?php echo "Anda Login Sebagai ==> <b><i>" . $_SESSION['username'];?></div> <!-- sebagai pemberitahuan yang menampilkan nama seseorang username yang sedang login dengan menggunakan session -->
	   <div id="centerbox">
		  <?php include "fungsi/tampilkan-pesanchat.php";?> <!-- Menampilkan pesan-pesan chat dari kesemuannya dengan operasi logic yang ada didalam fungsi tampilkan-pesanchat.php -->
	   </div> 
	   <div id="chat_userlist">
		  <?php include "fungsi/tampilkan-daftarmemberonline.php";?> <!-- Menampilkan user-user yang online dari kesemuannya dengan operasi logic yang ada didalam fungsi tampilkan-daftarmemberonline.php -->
	   </div>
	   <div style="clear:both;"></div>
	<!--form-chat-->
	   <div id="form">
		  <form name="message" action="" id="chatform">
			<input type="text" name="pesan-inputan" id="pesan-inputan"> <!-- untuk memasukkan text inputan message chatting -->
			<button name="kirimkan-pesan" id="kirimkan-pesan" type="submit">Kirim Chat !!!</button> <!-- tombol untuk melakukan submit inputan message -->
		  </form>
	   </div>
	<!--form-chat-->

	</div>
	<script language='javascript'>
		//membuat document jquery
		$(document).ready(function(){
			//variable yg dibaca dengan ajax untuk di kirim
			$("#kirimkan-pesan").click(function(){    <!-- mengambil id kirimkan-pesan agar ketika di klik maka akan mengarah ke sini -->
				var pesanclient = $("#pesan-inputan").val();    <!-- memberikan variabel baru pada id yang diambil dari pesan-inputan, jadi pesan inputan yang dimasukkan tadi berubah kedalam variabel baru tersebet yaitu pesadariclient -->
				$.post("fungsi/fungsi_ngirimpesan.php", {text: pesanclient});    <!-- digunakan untuk memanggil fungsi_ngirimpesan.php dimana variabel pesandariclien tadi digunakan sebagai parameter acuan -->
				$("#pesan-inputan").attr("value", "");     <!-- Mengosongkan kembali inputan dari pesan-inputan tadi agar memudahkan dalam menginputkan pesan baru -->
				return false;
			});		
			//fungsi tampilpesanchat
			function tampilpesanchat(){
				var oldscrolHeight = $("#centerbox").attr("scrollHeight") - 20; <!-- membuat variabel baru yang bernama oldscrolHeight dimana mengarah ke id centerbox dan diberikan attribut scrollHeight yang didapatkan dari javascript -->
				//load ajax message
				$.ajax({
					url : "fungsi/tampilkan-pesanchat.php", <!-- mengakses fungsi tampilkan-pesanchat.php untuk ditampilkan pada id centerbox -->
					cache : false,
					success : function(html){
						$("#centerbox").html(html); <!-- diarahkan ke id centerbox tadi -->
						var newscrollHeight = $("#centerbox").attr("scrollHeight") - 20; <!-- memasukkan variabel bari dengan nama newscrollHeight ke id centerbox dan dengan attribut scrollHeight -->
						if(newscrollHeight > oldscrollHeight){ <!-- membandingkan antara newscrollheight dan oldscrollheight yang telah didefinisikan diatas -->
						$("#centerbox").animate({scrollTop: newscrollHeight}, 'normal'); //membuat scrol otomatisnya
						}
					},
				});
			}
			function tampiluseronline(){
				var oldscrolHeight = $("#chat_userlist").attr("scrollHeight") - 20; <!-- membuat variabel baru yang bernama oldscrolHeight dimana mengarah ke id chat_userlist dan diberikan attribut scrollHeight yang didapatkan dari javascript -->
				$.ajax({
					url : "fungsi/tampilkan-daftarmemberonline.php", <!-- mengakses fungsi daftarmemberonline.php untuk ditampilkan pada if chat_userlist -->
					cache : false,
					success : function(html){
						$("#chat_userlist").html(html); <!-- diarahkan ke id centerbox tadi -->
						var newscrollHeight = $("#chat_userlist").attr("scrollHeight") - 20;
						if(newscrollHeight > oldscrollHeight){ <!-- membandingkan antara newscrollheight dan oldscrollheight yang telah didefinisikan diatas -->
							$("#chat_userlist").animate({scrollTop: newscrollHeight}, 'normal'); //membuat scrol otomatisnya
						}
					},
				});
			}
			
			setInterval (tampilpesanchat, 1000); <!-- melakukan refresh selama hitungan 1000ms / detik pada fungsi tampilpesanchat -->
			setInterval (tampiluseronline, 1000); <!-- melakukan refresh selama hitungan 1000ms / detik pada fungsi tampiluseronline -->
		});
	</script>

</div>
		<div class="container_16 foot"> <!-- membagi container bawah dengan template grid dimana sebagai footer -->
		<p>By Qodri | Qoma-Tech <br/>Dibuat untuk memenuhi nilai Tugas Sistem Terdistribusi </p>
		</div>
	</body>
</html>