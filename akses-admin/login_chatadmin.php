<html>
	<head>
		<title>Tugas SISTER</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"> <!--Memanggil file css-->
		<script type="text/javascript" src="jquery-1.2.3.min.js"></script> <!--Memanggil file javascript-->
		<script>
            function keluar()
            {
                alert("Silahkan hubungi administrator untuk menanyakan password anda...");
            }
    </script>
	</head>
	<body>
		<div class="container_16 warna1">
				<div class="grid_8 brand"><img src="images/headeruser.png"></div>
		</div>
		<div class="container_16 warna">

		<div class="grid_5 content_b">
		<form action= "fungsi/fungsi_login.php" method="post" id="form-login">
		<br />
		<center><p1>Member Login</p1></center>
		<hr></hr>
		<br />
			&nbsp &nbsp &nbsp Username &nbsp &nbsp : &nbsp &nbsp <input type="text" id="username" name="username" placeholder="username anda" onclick="this.value='';">
			<br />
			<br />
			&nbsp &nbsp &nbsp Password &nbsp &nbsp : &nbsp &nbsp <input type="password" name="password" id="password" placeholder="password anda" onclick="this.value='';">
			<br />
			<br />
			<br />
			<p0><input id="submit_login" name="submit" value="Login" type="image" src="images/login-btn.png" width="103" height="42" style="margin-left:90px";/><p0>
		</form>
		</div>
	
			</div>
		<div class="container_16 foot"> <!-- membagi container bawah dengan template grid dimana sebagai footer -->
		<p>By Qodri | Qoma-Tech <br/>Dibuat untuk memenuhi nilai Tugas Sistem Terdistribusi </p>
		</div>
	</body>
</html>