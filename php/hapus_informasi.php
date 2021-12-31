<?php
// koneksi database
require 'sessionchecker_admin.php';
include 'conf/connection.php';
// menangkap data id yang di kirim dari url
$id_informasi = $_GET['id_informasi'];


// menghapus data dari database
mysqli_query($koneksi, "DELETE from informasi where id_informasi = '$id_informasi'");

// mengalihkan halaman kembali ke index.php
header("location:tampil_informasi.php");
