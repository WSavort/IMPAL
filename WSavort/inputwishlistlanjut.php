<?php
	include("koneksi.php");
	session_start();
	
	$id_wishlist 		= $_POST['wishlist'];
	$tanggal_awal		= $_POST['tanggal_awal'];
	$tanggal_akhir		= $_POST['tanggal_akhir'];
	$setoran_wishlist	= $_POST['setoran_wishlist'];
	
	//hitung selisih waktu
	$date1				= new DateTime($tanggal_awal);
	$date2				= new DateTime($tanggal_akhir);
	$sisa_hari			= date_diff($date1,$date2);
	$hasil				= $sisa_hari->days;

	$nama				= $_SESSION['nama'];

	//mengambil nilai nim user yang sedang login
	$data_mhs		= "SELECT * from data_mahasiswa where nama = '$nama'";
	$ceknim = mysqli_query($connect,$data_mhs);
	$row = mysqli_fetch_array($ceknim);
	$nim = $row['nim'];
	
	//membuat kode otomatis
	$id_transaksi = "SELECT id_transaksi from transaksi where nim = '$nim' ORDER BY id_transaksi DESC";
//	$id_wishlist = "SELECT max(id_wishlist) from wishlist where nim = '$nim'";
	$cek_id = mysqli_query($connect, $id_transaksi);
	$kode	= mysqli_fetch_array($cek_id);
	$kd_transaksi = $kode['id_transaksi'];

	//penentuan kode
	$urutan = substr($kd_transaksi,6,3);
	$add = (int) $urutan;
	$add = $add + 1;
	//mengambil 4 angka terakhir nim
	$pisah = substr($nim,6,4);

	if(strlen($add) == 1){
		$format_kode = "TR".$pisah."00".$add;
	}else if(strlen($add)==2){
		$format_kode = "TR".$pisah."0".$add;
	}else{
		$format_kode = "TR".$pisah.$add;
	}
	
	$ceksaldo = "update data_mahasiswa set saldo = saldo + '$setoran_wishlist' where nim = '$nim'";
	
	$insert = "INSERT INTO transaksi VALUES('$format_kode','$id_wishlist','$nim','$tanggal_awal','$tanggal_akhir','$setoran_wishlist','$hasil')";

	if($insert){
		$add = mysqli_query($connect, $insert);
		header('location:ProgressWishlist.php');
		$update = mysqli_query($connect,$ceksaldo);
	} else{
		echo "gagal";
	}
?>