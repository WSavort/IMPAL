<?php
	include("koneksi.php");
	session_start();
	$email			= $_POST['email'];
	$alamat			= ucwords($_POST['alamat']);
	$hp				= $_POST['hp'];
	$password		= $_POST['password'];

	$nama				= $_SESSION['nama'];
	//mengambil nilai nim user yang sedang login
	$data_mhs		= "SELECT * from data_mahasiswa where nama = '$nama'";
	$ceknim = mysqli_query($connect,$data_mhs);
	$row = mysqli_fetch_array($ceknim);
	$nim = $row['nim'];

	$updateemail = "UPDATE data_mahasiswa set email = '$email' where nim = '$nim'";
	$updatealamat = "UPDATE data_mahasiswa set alamat = '$alamat' where nim = '$nim'";
	$updatehp = "UPDATE data_mahasiswa set no_hp = '$hp' where nim = '$nim'";
	$updatepassword = "UPDATE data_mahasiswa set password = '$password' where nim = '$nim'";
	
	if($password !== ""){
		$update5 = mysqli_query($connect,$updatepassword);
	}
	if($alamat !== ""){
		$update3 = mysqli_query($connect,$updatealamat);
	}
	if($email !== ""){
		$update2 = mysqli_query($connect,$updateemail);
	}
	if($hp !== ""){
		$update4 = mysqli_query($connect,$updatehp);
	}
	header('location:Profile.php');
?>