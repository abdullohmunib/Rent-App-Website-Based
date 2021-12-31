<?php
// koneksi database
require 'sessionchecker_admin.php';
include 'conf/connection.php';
// menangkap data id yang di kirim dari url
$id_riwayat = $_GET['id_riwayat'];


// menghapus data dari database
mysqli_query($koneksi, "delete from riwayat where id_riwayat = '$id_riwayat'");

// mengalihkan halaman kembali ke index.php
header("location:admin_tanggapan.php");
