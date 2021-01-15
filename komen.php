<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
$b = $_POST['nama_konsultan'];
$c = $_POST['umur'];
$d = $_POST['email'];
$e = $_POST['keluhan'];
	
	// buat query
	
	
	$sql	="INSERT INTO konsultasi (nama_konsultan, umur, email, keluhan)
			VALUE ('$b','$c','$d','$e')";
	$query = mysqli_query($db, $sql);
	// apakah query simpan berhasil
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: konsultasi.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: konsultasi.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
