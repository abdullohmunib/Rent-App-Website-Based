<?php
// koneksi database
require 'sessionchecker_pengguna.php';
include 'conf/connection.php';

// menangkap data yang di kirim dari form
$email = $_SESSION["email"];
$nama_penyewa = $_POST['nama_penyewa'];
$nama_fasilitas = $_POST['nama_fasilitas'];
$hari = $_POST['hari'];
$no_telp = $_POST['no_telp'];
$tanggal = $_POST['tanggal'];
$harga = ''; 
if($_POST['nama_fasilitas']=="Gedung Olahraga") {
	$harga='8000000';
}elseif ($_POST['nama_fasilitas']=="Auditorium") {
	$harga='10000000';
}elseif ($_POST['nama_fasilitas']=="Rusunawa Kampus") {
	$harga='5000000';
}elseif($_POST['nama_fasilitas']=="Lapangan Sepak Bola") {
	$harga='8000000';
}else{
	$harga="";
}
$total=$harga*$_POST['hari'];
$status='Menunggu';


mysqli_query($koneksi, "INSERT INTO riwayat (email, nama_penyewa, nama_fasilitas, hari, no_telp,tanggal,harga,total,status) VALUES ('$email','$nama_penyewa','$nama_fasilitas','$hari','$no_telp','$tanggal','$harga','$total','$status')");
// mengalihkan halaman kembali ke index.php
header("location: riwayatpengajuan.php");


