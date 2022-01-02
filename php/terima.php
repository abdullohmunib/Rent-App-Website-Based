<?php
require 'sessionchecker_admin.php';
require 'conf/connection.php';

$nip = $_SESSION["nip"];
$id_riwayat = $_GET['id_riwayat'];


mysqli_query($koneksi, "UPDATE riwayat SET status = 'Diterima', nip = $nip WHERE id_riwayat = $id_riwayat");


header("location:admin_tanggapan.php");
