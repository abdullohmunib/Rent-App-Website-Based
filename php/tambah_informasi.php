<?php
// koneksi database
require 'sessionchecker_admin.php';
include 'conf/connection.php';

// menangkap data yang di kirim dari form
$informasi = $_POST['informasi'];
$nip = $_SESSION["nip"];

// menginput data ke database
mysqli_query($koneksi, " INSERT INTO informasi (informasi, nip) values('$informasi','$nip')");

// mengalihkan halaman kembali ke index.php
header("location:tampil_informasi.php");
