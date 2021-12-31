<?php
require 'sessionchecker_pengguna.php';
include 'conf/connection.php';

$id_riwayat = $_GET['id_riwayat'];
$nama_penyewa = $_POST['nama_penyewa'];
$nama_fasilitas = $_POST['nama_fasilitas'];
$hari = $_POST['hari'];
$no_telp = $_POST['no_telp'];
$tanggal = $_POST['tanggal'];

$update = mysqli_query($koneksi, "UPDATE riwayat set 
	nama_penyewa='$nama_penyewa',
	nama_fasilitas='$nama_fasilitas',
	hari='$hari',
	no_telp='$no_telp',
	tanggal='$tanggal' where
	id_riwayat= $id_riwayat");
if($update){
	// echo "header('location: riwayatpengajuan.php')";
	echo "<script> alert('Data berhasil disimpan')</script>)";
}else{
	echo "<script> alert('Data tidak berhasil disimpan')</script>)";
	header("refresh:0;riwayatpengajuan.php");
}