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
if ($error=="data kosong")
{
   $pesan="<h4><font color=red>Silahkan Lengkapi Formulir Pendaftaran</color></h4>";
}
if ($error=="nim sudah ada")
{
   $pesan="<h4><font color=red>Nim Sudah Terdaftar</color></h4>";
}
if ($error=="nama sudah ada")
{
   $pesan="<h4><font color=red></color>Nama Sudah Terdaftar</h4>";
}
if($error=="email sudah ada"){
	$pesan="<h4><font color=red></color>Email Sudah Terdaftar</h4>";
}
if($error=="pasword beda"){
	$pesan="<h4><font color=red>Password yang anda inputkan berbeda, Silahkan Masukkan Ulang Password</color></h4>";
}
if($error=="format salah"){
	$pesan="<h4><font color=red></color>Format Email Salah</h4>";
}
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
	<?php echo $pesan?>
	<a class="namalogo"><b>( Wishlist Saving Savort )</b></a>
	<div class="register">
		<p class="tulisan_register" ><font color=black><b>registrasi</b></color></p>
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
