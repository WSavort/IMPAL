<?php
	session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>home</title>
	<link href="awalcss.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="container">
	<div id="header">
		<img src="images/Logo WSavort.png" alt="WSavort" width="200" class="logo">
		<div class="menu-utama">
		<ul>
			<li><a href="awal.php"><b>Home</b></a></li>
			<li><a href="Profile.php"><b>Profile</b></a></li>
			<li><a href="#"><b>Wishlist</b></a>
				<ul class="subwish">
					<li><a href="DaftarWishlist.php">Daftar Wishlist</a></li>
					<li><a href="ProgressWishlist.php">Progress Wishlist</a></li>
					<li><a href="WishlistTercapai.php">Wishlist Tercapai</a></li>
				</ul>
			</li>
			<li><a href="about.php"><b>About</b></a></li>
			<li><a href="contact.php"><b>Contact</b></a></li>
		</ul>
		</div>
		<div class="logout">
			<a href="logout.php"><b>Log out</b></a>
		</div>
	</div>
	<div id="home">
		<h1>Selamat Datang di WSavort <?php echo $_SESSION['nama']?></h1>
		<img src="images/1.png" alt="WSavort" width="200" class="buletan1">
		<img src="images/2.png" alt="WSavort" width="200" class="buletan2">
		<img src="images/3.png" alt="WSavort" width="200" class="buletan3">
		<img src="images/4.png" alt="WSavort" width="200" class="buletan4">
		<h2 class="ket1">Registrasi Wishlist Murah<p>Buat Akun Gratis</p></h2>
		<h2 class="ket2">Registrasi Wishlist Mudah<p>Hanya dengan menggunakan KTM/KTP <br>untuk mendaftar</p></h2>
		<h2 class="ket3">Cara Pembayaran yang variatif<p>Bisa memilih berbagai macam metode pembayaran</p></h2>
		<h2 class="ket4">Tidak Ada Bunga		<p>Bunga 0%, tidak ada bunga setiap <br>anda menyimpan uang disini</p></h2>

	</div>
	<div id="footer">
		<p>©2019 WSavort - All Right Reserved</p>
	</div>
	</div>
</body>
</html>
