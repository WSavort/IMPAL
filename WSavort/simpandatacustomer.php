<?php
	include("koneksi.php");
	$NIM			= $_POST['NIM'];
	$fullname 		= ucwords($_POST['fullname']);
	$email			= $_POST['email'];
	$alamat			= ucwords($_POST['alamat']);
	$hp				= $_POST['hp'];
	$password		= $_POST['password'];
	$ulangpassword	= $_POST['ulangpassword'];
	$query = "INSERT INTO data_mahasiswa(nim,nama,email,alamat,no_hp,password,ulang_password,saldo) VALUES('$NIM','$fullname','$email','$alamat','$hp','$password','$ulangpassword',0)";
	$ceknim = "SELECT nim FROM data_mahasiswa WHERE nim = '$NIM'";
	$ceknama = "SELECT nama FROM data_mahasiswa WHERE nama = '$fullname'";
	$cekemail = "SELECT email FROM data_mahasiswa WHERE email = '$email'";
//	$cekhp = "SELECT nama FROM data_mahasiswa WHERE no_hp = '$hp'";
////	$ceknim = "SELECT nim, nama, email, no_hp FROM data_mahasiswa WHERE nim = '$NIM' or nama = '$fullname' OR email='$email' OR no_hp = '$hp'";
//	$insert = mysqli_query($connect, $query);
	$cek1 = mysqli_query($connect, $ceknim);
	$row1 = mysqli_fetch_array($cek1);
	$cek2 = mysqli_query($connect, $ceknama);
	$row2 = mysqli_fetch_array($cek2);
	$cek3 = mysqli_query($connect, $cekemail);
	$row3 = mysqli_fetch_array($cek3);
//	$cek4 = mysqli_query($connect, $cekhp);
//	$row4 = mysqli_fetch_array($cek4);
//	$num = mysqli_num_rows($cek);
	if($NIM == "" or $fullname == "" or $email == "" or $alamat == "" or $hp == "" or $password == "" or $ulangpassword == ""){
		header("location:registererror.php?error=data kosong");
	} else if($row1){
		header("location:registererror.php?error=nim sudah ada");
	} else if($row2){
		header("location:registererror.php?error=nama sudah ada");
	} else if($row3){
		header("location:registererror.php?error=email sudah ada");
	} else if($password != $ulangpassword){
		header("location:registererror.php?error=pasword beda");
	} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	header("location:registererror.php?error=format salah");
	}  else{
		$insert = mysqli_query($connect, $query);
		header('location:login.php');
	}
?>