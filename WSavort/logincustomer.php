<?php
	include("koneksi.php"); //import file koneksi.php

	$username = $_POST['username']; //mengambil data username
	$password = $_POST['password']; //mengambil data password
	$query = "SELECT * FROM data_mahasiswa WHERE (email = '$username' OR nim = '$username') AND password = '$password'";
	$cek = mysqli_query($connect,$query); //untuk ngecek ke database
	$row = mysqli_fetch_array($cek); //untuk mengambil baris data sesuai inputan
	$number = mysqli_num_rows($cek); //mengecek jika username dan pass sama bernilai 1 jika tidak nilainya 0
	if($number != 0){
		session_start();
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['nim'] = $row['nim'];
		header("location:awal.php");
	} else if($username == "" and $password == "") {
		header("location:loginerror.php?error=kosong");
	} else if($username == "" and $password !== "") {
		header("location:loginerror.php?error=nama kosong");
	} else if($username !== "" and $password == "") {
		header("location:loginerror.php?error=pass kosong");
	} else{
		header("location:loginerror.php?error=Username atau Password salah");
	}
?>