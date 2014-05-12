<html>
	<head>
		<title>Tugas SISTER Chatting</title> <!-- Menampilkan judul -->
		<link href="css/style.css" rel="stylesheet" type="text/css"> <!--Memanggil file css-->
	</head>
	<body>
		<div class="container_16 warna1"> <!-- membagi container paling atas dimana sebagai lokasi banner-->
				<div class="grid_8 brand"><img src="images/headeruser.png"></div> <!-- Untuk menampilkan banner dengan logo dan nama -->
		</div>
		<div class="container_16 warna"> <!-- membagi container tengah dengan template grid dimana sebagai isi nantinya-->
		   <div class="hero-unit">
			<h3>Pendaftaran Member</h3><br/><br/>
			<form method="POST" action="fungsi/fungsi_nambahmember.php" enctype="multipart/form-data"> <!-- memanggil fungsi_nambahmember.php untuk digunakan pada form inputan dibawah -->
			<center>
			<table border="0" cellpadding="5" cellspacing="0">
			<tbody>
			<tr> <!-- memberikan inputan nama untuk registrasi -->
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input name="namacalonmember" type="text" id="nama_depan" size="30" required="required"/></td>
			</tr>
			<tr> <!-- memberikan inputan username untuk registrasi -->
				<td>Username</td>
				<td>:</td>
				<td><input name="usercalonmember" type="text" size="30" required="required"/></td>
			</tr>
			<tr> <!-- memberikan inputan password untuk registrasi -->
				<td>Password</td>
				<td>:</td>
				<td><input name="passwordcalonmember" type="password" size="30" required="required"/></td>
			</tr>
			<tr>
				<td colspan="3">
					<center>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<button type="submit">Submit</button> <!-- button submit kemudian diarahkan ke fungsi_nambahmember.php setelah diatas tadi dipanggil -->
					<button type="reset">Reset</button> <!-- button reset kemudian diarahkan ke fungsi_nambahmember.php setelah diatas tadi dipanggil -->
					</center>
				</td>
			</tr>
			</tbody>
			</table>
			</center>
			</form>
		  </div>
		 </div>
	  
	  </div>
		<div class="container_16 foot"> <!-- membagi container bawah dengan template grid dimana sebagai footer -->
		<p>By Qodri | Qoma-Tech <br/>Dibuat untuk memenuhi nilai Tugas Sistem Terdistribusi </p>
		</div>
	</body>
</html>