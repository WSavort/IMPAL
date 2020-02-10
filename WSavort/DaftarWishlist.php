<?php
	include("koneksi.php");
	session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Wishlist <?php echo $_SESSION['nama']?></title>
	<link href="DaftarWishlist.css" type="text/css" rel="stylesheet">
</head>
<body>
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
<div id="DaftarWishlist">
  <div class="daftar_wishlist">
    <p class="tulisan_wishlist"><strong>Input Wishlist, </strong></p>
    <form action="inputwishlist.php" method="post">
		  <input type="text" name="nama_wishlist" class="form_wishlist" placeholder="Nama Wishlist">
		  <input type="text" name="jumlah_wishlist" class="form_wishlist" placeholder="Jumlah Wishlist">
		  <input type="text" name="budget_wishlist" class="form_wishlist" placeholder="Budget Wishlist">
		  <input type="submit" class="tombol_wishlist" value="Simpan">
	</form>		
	</div>
  <div class="TabelWishlist">
  <table width="700" border="1">
   <p class="tulisan_wishlist"><b>Daftar Wishlist</b></p>
    <tbody>
      <tr bgcolor="#a5faca">
        <th>No.</th>
        <th>ID Wishlist</th>
        <th>Nama Wishlist</th>
        <th>Jumlah Wishlist</th>
        <th>Budget Wishlist </th>
        <th>Total Wishlist </th>
      </tr>
      <?php
		include("koneksi.php");
		$nama = $_SESSION['nama'];
		$query = "SELECT * from wishlist join data_mahasiswa using(nim) where nama = '$nama'";
		$wishlist = mysqli_query($connect, $query);
		$no=1;
		while($data = mysqli_fetch_array($wishlist)){
				?>
				<tr align="center" onMouseOver="this.style.background='#B7FDFF';" onMouseOut="this.style.background=''">
					<td><?php echo $no++; ?></td>
					<td><?php echo $data['id_wishlist']; ?></td>
					<td><?php echo $data['nama_wishlist']; ?></td>
					<td><?php echo $data['jumlah_wishlist']; ?></td>
					<td >Rp. <?php echo $data['budget_wishlist']; ?></td>
					<td>Rp. <?php echo $data['total_wishlist']; ?></td>
				</tr>
		<?php
		}
		?>
    </tbody>
  </table>
	</div>
	
  <div class="input_wishlist">
		<p class="tulisan_wishlist"><b>Input Wishlist Lanjut</b></p>
		<form action="inputwishlistlanjut.php" method="post">
			<p>Pilih Id Wishlist</p>
			<select name="wishlist">
				<option>--Pilih Wishlist--</option>
				<?php
				  $nama = $_SESSION['nama'];
				  $list = "SELECT DISTINCT * from wishlist join data_mahasiswa using(nim) where nama = '$nama'";
				  $ceklist = mysqli_query($connect, $list);
				  while($row = mysqli_fetch_array($ceklist)){?>
					<option value="<?php echo $row['id_wishlist']?>"><?php echo $row['id_wishlist'] ?></option>  
				  <?php } ?>
				?>
				
			</select>
			<p>Tanggal Awal Pembayaran Wishlist :</p>
			<input type="date" name="tanggal_awal">
			<p>Tanggal Akhir Pembayaran Wishlist :</p>
			<input type="date" name="tanggal_akhir">
				
<!--
			<p class="tulisan_wishlist"> 
				<label style="font-size: 14px;"><strong>Sistem Pembayaran :  </strong></label>
			<label><input type="radio" name="jenis pembayaran" value="Kredit"/> Kredit </label>
			<label><input type="radio" name="jenis pembayaran" value="Cash"/> Cash</label>
			<label><input type="radio" name="jenis pembayaran" value="Debit"/> Debit</label>
			</p>
-->
			
			<p>Masukkan Jumlah Uang Setoran</p>
		  <input type="text" name="setoran_wishlist" class="form_wishlist" placeholder="Masukkan Jumlah Setoran">
		  <input type="submit" class="tombol_lanjut_progress" value="Lanjut Progress">
	  </form>	
	</div>
</div>
<div id="footer">
<p>©2019 WSavort - All Right Reserved</p>
</div>
</body>
</html>
