<?php
	include("koneksi.php");
	$NIM			= $_REQUEST['NIM'];
	$fullname 		= $_REQUEST['fullname'];
	$email			= $_REQUEST['email'];
	$alamat			= $_REQUEST['alamat'];
	$hp				= $_REQUEST['hp'];
	$query1 = "SELECT nama FROM data_mahasiswa";
//	$query1 = "INSERT INTO data_mahasiswa(nim,nama,email,alamat,no_hp,password,ulang_password) VALUES('$NIM','$fullname','$email','$alamat','$hp')";
	$query2 = "SELECT * FROM data_mahasiswa";
	$row = mysqli_fetch_array($query1);
	$tampil = mysqli_query($connect,$query2);
	$insert = mysqli_query($connect, $query1);
	// mengalihkan ke halaman index.php
	session_start();
	if($_SESSION['nama'] == $row['nama']){
		$NIM = $_POST['nim'];
		echo $row['nama'];
		echo $row['email'];
		echo $row['alamat'];
		echo $row['hp'];
	}
	else{
		echo "PUSINGGGG";
	}
?>