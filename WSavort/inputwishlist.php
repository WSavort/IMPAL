<?php
	include("koneksi.php");
	session_start();
	
//	$id_wishlist 	= $_POST['id_wishlist'];
	$nama_wishlist	= ucwords($_POST['nama_wishlist']);
	$jumlah_wishlist= $_POST['jumlah_wishlist'];
	$budget_wishlist= $_POST['budget_wishlist'];
	$total_wishlist	= $jumlah_wishlist*$budget_wishlist;
	$nama			= $_SESSION['nama'];

	//mengambil nilai nim user yang sedang login
	$data_mhs		= "SELECT * from data_mahasiswa where nama = '$nama'";
	$ceknim = mysqli_query($connect,$data_mhs);
	$row = mysqli_fetch_array($ceknim);
	$nim = $row['nim'];
	
	//membuat kode otomatis
	$id_wishlist = "SELECT id_wishlist from wishlist where nim = '$nim' ORDER BY id_wishlist DESC";
//	$id_wishlist = "SELECT max(id_wishlist) from wishlist where nim = '$nim'";
	$cek_id = mysqli_query($connect, $id_wishlist);
	$kode	= mysqli_fetch_array($cek_id);
	$kd_wishlist = $kode['id_wishlist'];

//	if($kode){
//		$nilaikode = substr($kode[0],1);
//		$kode_wish = (int) $nilaikode;
//		
//	}

	//penentuan kode
	$urut = substr($kd_wishlist,8,3);
	$tambah = (int) $urut;
	$tambah = $tambah + 1;
	//mengambil 4 angka terakhir nim
	$pisah = substr($nim,6,4);

	if(strlen($tambah) == 1){
		$format_kode = "SVRT".$pisah."00".$tambah;
	}else if(strlen($tambah)==2){
		$format_kode = "SVRT".$pisah."0".$tambah;
	}else{
		$format_kode = "SVRT".$pisah.$tambah;
	}

	$insert = "INSERT INTO wishlist VALUES('','$format_kode','$nama_wishlist','$jumlah_wishlist','$budget_wishlist','$total_wishlist','$nim')";
	//$mhs = "select nim from data_mahasiswa where nama = '$nama'";

	if($insert){
		$add = mysqli_query($connect, $insert);
		echo $format_kode;
		echo $urut;
		header('location:DaftarWishlist.php');
	} else{
		echo "gagal";
	}
?>