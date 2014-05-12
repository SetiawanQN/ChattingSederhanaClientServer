<?php
	include "fungsi_ceksession.php";
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
				<div class="grid_8 login-box"><a href='logout_chatmember.php'><img src="images/logout-member.png"></a></div>
		</div>
		<div class="container_16 warna">

		<div id="wrapper">
		   <div id="navbar"><?php echo "Selamat datang ==> <b><i>" . $_SESSION['administrator'];?></div>
		</div>

      <!-- Main hero unit for a primary marketing message or call to action -->
      

      <!-- Example row of columns -->
      <div class="hero-unit">
		<a class="btn btn-large btn-primary" type="submit" href="panel_admin.php">Back</a>
		<br/><br/>
		<table class="table table-hover">
			<tr>
				<td><b>No</b></td>
				<td><b>Nama Lengkap</b></td>
				<td><b>Username</b></td>
				<td><b>Password</b></td>
				<td><b>Aksi</b></td>
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
						<td><?php echo $no; ?></td>
						<td><?php echo $nama; ?></td>
						<td><?php echo $username; ?></td>
						<td><?php echo $pass; ?></td>
						<td>
							<a href="fungsi/tampilkan_detailmember.php?id=<?php echo $id; ?>" title="Detail"><img src="images/detail.png" width="30" height="30" /></a>
							<a href="fungsi/tampilkan_editmember.php?id=<?php echo $id; ?>" title="Update"><img src="images/update.png" width="30" height="30" /></a>
							<a href="fungsi/fungsi_hapusmember.php?id=<?php echo $id; ?>" title="Delete" onclick="return confirm('Anda Yakin Ingin Menghapus Member Ini?');"><img src="images/delete.png" width="30" height="30" /></a>
						</td>
					</tr>
			<?php
					$no++;
				}
			?>
		</table>
	  </div>

</div>
		<div class="container_16 foot"> <!-- membagi container bawah dengan template grid dimana sebagai footer -->
		<p>By Qodri | Qoma-Tech <br/>Dibuat untuk memenuhi nilai Tugas Sistem Terdistribusi </p>
		</div>
	</body>
</html>