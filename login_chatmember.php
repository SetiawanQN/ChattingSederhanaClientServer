<html>
	<head>
		<title>Tugas SISTER Chatting</title> <!-- Menampilkan judul -->
		<link href="css/style.css" rel="stylesheet" type="text/css"> <!--Memanggil file css-->
		<script type="text/javascript" src="jquery-1.2.3.min.js"></script> <!--Memanggil file javascript-->
		<script> <!-- Script ini digunakan untuk memanggil function keluar, dimana diaplikasikan pada menu lupa password dibawah-->
            function keluar()
            {
                alert("Silahkan hubungi administrator untuk menanyakan password anda...");
            }
    </script>
	</head>
	<body>
		<div class="container_16 warna1"> <!-- membagi container paling atas dimana sebagai lokasi banner-->
				<div class="grid_8 brand"><img src="images/headeruser.png"></div> <!-- Untuk menampilkan banner dengan logo dan nama -->
		</div>
		<div class="container_16 warna"> <!-- membagi container tengah dengan template grid dimana sebagai isi nantinya-->

		<div class="grid_5 content_b"> <!-- Membagi content dengan grid css design dan digunakan sebagai objek login -->
		<form action= "fungsi/fungsi_login.php" method="post" id="form-login"> <!-- Memanggil fungsi_login yang terdapat pada direktori login sebagai operasi logic submit dibawah -->
		<br />
		<center><p1>Member Login</p1></center>
		<hr></hr>
		<br />
			&nbsp &nbsp &nbsp Username &nbsp &nbsp : &nbsp &nbsp <input type="text" id="username" name="username" placeholder="username anda" onclick="this.value='';"> <!-- Media penginputan username -->
			<br />
			<br />
			&nbsp &nbsp &nbsp Password &nbsp &nbsp : &nbsp &nbsp <input type="password" name="password" id="password" placeholder="password anda" onclick="this.value='';"> <!-- Media penginputan password -->
			<br />
			<p><a href="login_chatmember.php" onClick="keluar()" ><u style="color:blue">Lupa Kata Sandi ? </u></a></p> <!-- Jika lupa kata sandi maka akan mengarah pada function yang telah didefinisikan diatas tadi -->
			<p><a href="pendaftaran_member.php" ><u style="color:blue">Blm punya akun ? Daftar disini </u></a></p> <!-- menu tambahan untuk menambahkan akun yang diarahkan ke halaman pendaftara_member.php -->
			<p0><input id="submit_login" name="submit" value="Login" type="image" src="images/login-btn.png" width="103" height="42" style="margin-left:90px";/><p0>
		</form>
		</div>
	
			</div>
		<div class="container_16 foot"> <!-- membagi container bawah dengan template grid dimana sebagai footer -->
		<p>By Qodri, Uma, Subhan, Afik<br/>Dibuat untuk memenuhi nilai Tugas Sistem Terdistribusi dan agar mendapatkan nilai A :)</p>
		</div>
	</body>
</html>