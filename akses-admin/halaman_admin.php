<?php
	include "fungsi/fungsi_ceksession.php";
?>
<html>
	<head>
		<title>Tugas SISTER</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/style-chat.css" rel="stylesheet" type="text/css">
		<script type='text/javascript' src="js/jquery.min.js"></script>
	</head>
	<body onload="scrollbawah();">
		<div class="container_16 warna1">
				<div class="grid_8 brand"><img src="images/headeruser.png"></div>
				<div class="grid_8 login-box"><a href='logout_chatadmin.php'><img src="images/logout-member.png"></a></div>
		</div>
		<div class="container_16 warna">

		<div id="wrapper">
		   <div id="navbar"><?php echo "Selamat datang ==> <b><i>" . $_SESSION['administrator'];?></div>
		</div>
		<div class="hero-unit">
			<h3>Pendaftaran Member Melalui Admin</h3>
			<form method="POST" action="fungsi/fungsi_nambahmember.php" enctype="multipart/form-data"> <!-- memanggil fungsi_nambahmember.php untuk digunakan pada form inputan dibawah -->
			<center>
			<table border="0" cellpadding="5" cellspacing="0">
			<tbody>
			<tr> <!-- memberikan inputan nama untuk registrasi -->
				<td><p>Nama Lengkap</p></td>
				<td>:</td>
				<td><input name="namacalonmember" type="text" id="nama_depan" size="30" required="required"/></td>
			</tr>
			<tr> <!-- memberikan inputan username untuk registrasi -->
				<td><p>Username</p></td>
				<td>:</td>
				<td><input name="usercalonmember" type="text" size="30" required="required"/></td>
			</tr>
			<tr> <!-- memberikan inputan password untuk registrasi -->
				<td><p>Password</p></td>
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
		<br />
		<h3>Daftar Data List Member Chatting</h3>
		<div class="hero-unit">
		
		<center><table border='3.5' class="box" width='90%' bgcolor='white' >
			<tr>
				<td><center><b>No</b></center></td>
				<td><center><b>Nama Lengkap</b></center></td>
				<td><center><b>Username</b></center></td>
				<td><center><b>Password</b></center></td>
				<td><center><b>Aksi</b></center></td>
			</tr>
			<?php
				include "fungsi/fungsi_koneksidatabase.php";
				
				$no = 1;
				$tampil = "SELECT * FROM data_user";
				$querytampil = mysql_query($tampil);
				while($ahai = mysql_fetch_array($querytampil)) {
					$id = $ahai['id_user'];
					$nama = $ahai['nama'];
					$username = $ahai['username'];
					$pass = $ahai['password'];
			?>
					<tr>
						<td><center><?php echo $no; ?></center></td>
						<td><center><?php echo $nama; ?></center></td>
						<td><center><?php echo $username; ?></center></td>
						<td><center><?php echo $pass; ?></center></td>				
						<td><center><a href="fungsi/tampilkan_editmember.php?id=<?php echo $id; ?>" title="Update">Edit</a> ===
						<a href="fungsi/fungsi_hapusmember.php?id=<?php echo $id; ?>" title="Delete" onclick="return confirm('Anda Yakin Ingin Menghapus Member Ini?');">Hapus</a></center>
						</td>
					</tr>
			<?php
					$no++;
				}
			?>
		</table></center>
		<br />
		<br />
	  </div>
	</div>
		<div class="container_16 foot"> <!-- membagi container bawah dengan template grid dimana sebagai footer -->
		<p>By Qodri | Qoma-Tech <br/>Dibuat untuk memenuhi nilai Tugas Sistem Terdistribusi </p>
		</div>
	</body>
</html>