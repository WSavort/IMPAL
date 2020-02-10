<?php 
	include('koneksi.php');
	session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Progress Wishlist <?php echo $_SESSION['nama']?></title>
	<link href="ProgressWishlist.css" type="text/css" rel="stylesheet">
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
  <div class="TabelWishlist">
  <table width="1200" border="1">
   <p class="tulisan_wishlist"><b>Progress Wishlist</b></p>
    <tbody>
      <tr bgcolor="#a5faca">
        <th>No.</th>
        <th>ID Wishlist</th>
		<th>Nama Wishlist</th>
		<th>ID Transaksi</th>
        <th>Tanggal Setoran</th>
		<th>Tanggal Target</th>
		<th>Sisa Hari</th>
        <th>Setoran Wishlist</th>
        <th>Saldo Wishlist </th>
        <th>Target Wishlist </th>
      </tr>
		<?php
		include("koneksi.php");
		$nama = $_SESSION['nama'];
		$query = "SELECT * from transaksi join data_mahasiswa using(nim) join wishlist using(id_wishlist) where nama = '$nama'";
		$wishlist = mysqli_query($connect, $query);
		$no=1;
		while($data = mysqli_fetch_array($wishlist)){
				?>
				<tr align="center" onMouseOver="this.style.background='#B7FDFF';" onMouseOut="this.style.background=''">
					<td><?php echo $no++; ?></td>
					<td><?php echo $data['id_wishlist']; ?></td>
					<td><?php echo $data['nama_wishlist']; ?></td>
					<td><?php echo $data['id_transaksi']; ?></td>
					<td><?php echo $data['tanggal_awal']; ?></td>
					<td ><?php echo $data['tanggal_akhir']; ?></td>
					<td><?php echo $data['sisa_hari']; ?> Hari</td>
					<td>Rp. <?php echo $data['uang_setoran']; ?></td>
					<td>Rp. <?php echo $data['saldo']?></td>
					<td>Rp. <?php echo $data['total_wishlist']; ?></td>
				</tr>
		<?php
		}
		?>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
	  <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>		
	  <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>   
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
	</div>

</div>
<div id="footer">
<p>©2019 WSavort - All Right Reserved</p>
</div>
</body>
</html>
