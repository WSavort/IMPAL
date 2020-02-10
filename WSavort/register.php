<?php
	include("koneksi.php")
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register WSavort</title>
	<link href="registercss.css" type="text/css" rel="stylesheet">
</head>

<body>
	<img src="images/Logo WSavort.png" alt="WSavort" class="logo">
	<a class="namalogo"><b>( Wishlist Saving Savort )</b></a>
	<div class="register">
		<p class="tulisan_register"><b>registrasi</b></p>
		<form action="simpandatacustomer.php" method="post">
			<input type="text" name="NIM" class="form_register" placeholder="NIM">
			<input type="text" name="fullname" class="form_register" placeholder="Nama Lengkap">
			<input type="text" name="email" class="form_register" placeholder="Email">
			<input type="text" name="alamat" class="form_register" placeholder="Alamat">
			<input type="text" name="hp" class="form_register" placeholder="Nomor Handphone">
			<input type="password" name="password" class="form_register" placeholder="Password">
			<input type="password" name="ulangpassword" class="form_register" placeholder="Ulangi Password">
			<input type="submit" name="register" class="tombol_register" value="Register Sekarang">
		</form>
		
	</div>	
</body>
</html>
