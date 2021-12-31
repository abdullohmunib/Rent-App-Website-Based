<?php
require 'conf/connection.php';

if (isset($_GET['nama_penyewa'])) {
	$nama_penyewa = $_GET['nama_penyewa'];
	$db_sewa = query("SELECT * FROM riwayat WHERE nama_penyewa LIKE '%" . $nama_penyewa . "%'");
} else {
	$db_sewa = query("SELECT * FROM riwayat");
}