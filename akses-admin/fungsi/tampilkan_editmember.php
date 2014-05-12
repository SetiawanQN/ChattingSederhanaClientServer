<?php
	include "fungsi_ceksession.php";
?>
<html>
	<head>
		<title>Tugas SISTER</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css">
		<link href="../css/style-chat.css" rel="stylesheet" type="text/css">
		<script type='text/javascript' src="../js/jquery.min.js"></script>
	</head>
	<body onload="scrollbawah();">
		<div class="container_16 warna1">
				<div class="grid_8 brand"><img src="../images/headeruser.png"></div>
				<div class="grid_8 login-box"><a href='logout_chatmember.php'><img src="../images/logout-member.png"></a></div>
		</div>
	<div class="container_16 warna">

		<div id="wrapper">
		   <div id="navbar"><?php echo "Selamat datang ==> <b><i>" . $_SESSION['administrator'];?></div>
		</div>
      <div class="hero-unit">
		<h3>Edit Data Member</h3>
        <form method="POST" action="fungsi_editmember.php" enctype="multipart/form-data">
		<center>
		<table border="0" cellpadding="5" cellspacing="0">
		<tbody>
		<?php
			include "fungsi_koneksidatabase.php";
			
			$id = $_GET['id'];
			$tampil = "SELECT * FROM data_user WHERE id_user='$id';";
			$querytampil = mysql_query($tampil);
			$ahai = mysql_fetch_array($querytampil);
			$nama = $ahai['nama'];
			$username = $ahai['username'];
			$pass = $ahai['password'];
		?>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input name="nama" type="text" id="nama_depan" value="<?php echo $nama; ?>" size="30" required="required"/></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input name="username" type="text" value="<?php echo $username; ?>" size="30" required="required"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>
				<input name="pass" type="text" value="<?php echo $pass; ?>" id="tempat_lahir" size="30" required="required"/>
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<center>
				<button  type="submit">Submit</button>
				<button  type="reset">Reset</button>
				</center>
			</td>
		</tr>
		</tbody>
		</table>
		</center>
		</form>
		<center><a type="submit" href="../halaman_admin.php">Back</a><br/><br/></center>
      </div>
	</div>
		<div class="container_16 foot"> <!-- membagi container bawah dengan template grid dimana sebagai footer -->
		<p>By Qodri | Qoma-Tech <br/>Dibuat untuk memenuhi nilai Tugas Sistem Terdistribusi </p>
		</div>
	</body>
</html>