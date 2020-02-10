<?php
	session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile <?php echo $_SESSION['nama']?></title>
	<link href="profile.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div id="header">
		<img src="images/Logo WSavort.png" alt="WSavort" width="200" class="logo">
		<div class="menu-utama">
		<ul>
			<li><a href="awal.php"><b>Home</b></a></li>
			<li><a href="#"><b>Profile</b></a></li>
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
	<div class="TabelProfile">
	  <table width="700" border="1">
	   <p class="tulisan_profile"><b>Hello, <?php echo $_SESSION['nama']?></b></p>
	  </table>
		<?php
		include("koneksi.php");
		$nim = $_SESSION['nim'];
		$query = "SELECT * from data_mahasiswa where nim = '$nim'";
		$mahasiswa = mysqli_query($connect, $query);
		$no=1;
		while($data = mysqli_fetch_array($mahasiswa)){
				?>
		<br>
		<p class="tulisan_profile">NIM &ensp;&ensp;&nbsp;&ensp;&ensp;&ensp;&nbsp;: <?php echo $data['nim']?></p>
		<p class="tulisan_profile">Nama &ensp;&ensp;&nbsp;&ensp;&ensp;&nbsp;: <?php echo $data['nama']?></p>
		<p class="tulisan_profile">Email &ensp;&ensp;&nbsp;&ensp;&ensp;&nbsp;: <?php echo $data['email']?></p>
		<p class="tulisan_profile">Alamat &ensp;&ensp;&nbsp;&ensp;&nbsp;: <?php echo $data['alamat']?></p>
		<p class="tulisan_profile">Nomor HP &ensp;: <?php echo $data['no_hp']?></p>
		<p class="tulisan_profile">Saldo &ensp;&ensp;&nbsp;&ensp;&ensp;&nbsp;: Rp. <?php echo $data['saldo']?></p>
			<?php
		}
		?>
	</div>
	<div class="input_profil">
		<form action="updateprofile.php" method="post">
			<p class="tulisan_profile"><strong>Edit Profile, </strong></p>
				<input type="text" name="email" class="form_register" placeholder="Email">
				<input type="text" name="alamat" class="form_register" placeholder="Alamat">
				<input type="text" name="hp" class="form_register" placeholder="Nomor Handphone">
				<input type="password" name="password" class="form_register" placeholder="password">
				<input type="submit" name="register" class="tombol_register" value="Edit Profile">
			</form>
	</div>
	<div id="footer">
		<p>©2019 WSavort - All Right Reserved</p>
	</div>
</body>
</html>
