<?php
//ambil nilai variabel error
if (isset($_GET['error']))
{
   $error=$_GET['error'];
}
else
{
   $error="";
}
  
//siapkan pesan kesalahan
$pesan="";
if ($error=="kosong")
{
   $pesan="<h4><font color=red>Silahkan Isi Username atau Password Anda</color></h4>";
}
if ($error=="Username atau Password salah")
{
   $pesan="<h4><font color=red>Username atau Password Salah</color></h4>";
}
if ($error=="nama kosong")
{
   $pesan="<h4><font color=red></color>Username belum terisi</h4>";
}
if($error=="pass kosong"){
	$pesan="<h4><font color=red></color>Password tidak boleh kosong</h4>";
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login WSavort</title>
	<link href="logincss.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div id="header">
		<img src="images/Logo WSavort.png" alt="WSavort" width="200" class="logo">
	</div>
	<div id="bglogin">
		<div class="login">
			<p class="tulisan_login"><b>Silahkan Login</b></p>
			<form action="logincustomer.php" method="post">
				<label>Username</label>
				<input type="text" name="username" class="form_login" placeholder="NIM atau email ..">
				<br/>
			  <label>Password</label>
				<input type="password" name="password" class="form_login" placeholder="Password ..">
				<br>
				<input type="submit" class="tombol_login" value="LOGIN">
				<p>Belum punya akun?</p><a href="register.php" class="daftar"><b>Daftar disini</b></a>
			</form>
			<?php echo $pesan?>
		</div>
	</div>
	<div id="footer">
		<p>©2019 WSavort - All Right Reserved</p>
	</div>
</body>
</html>