<?php
session_start();

if (isset($_SESSION["loginadmin"])) {
	header("Location: main_admin.php");
	exit;
}

$error = '';
if (isset($_POST['submit'])) {
	if (empty($_POST['nip']) || empty($_POST['password'])) {
		$error = "nip atau password anda salah!";
	} else {
		$nip = $_POST['nip'];
		$password = $_POST['password'];

		$koneksi = mysqli_connect("localhost", "root", "", "db_sewa");

		$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE password='$password' AND nip='$nip'");
		$row = mysqli_num_rows($query);
		if ($row == 1) {
			$_SESSION["loginadmin"] = true;
			$_SESSION["nip"] = $nip;
			header("location: main_admin.php"); // pindah ke halaman lain
		} else {
			$error 	= "NIP atau password anda salah";
		}
		mysqli_close($koneksi);
	}
}
