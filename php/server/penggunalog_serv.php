<?php
session_start();

if (isset($_SESSION["loginpengguna"])) {
    header("Location: main_pengguna.php");
    exit;
}

$error = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email atau password anda salah!";
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $koneksi = mysqli_connect("localhost", "root", "", "db_sewa");

        $query = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE password='$password' AND email='$email'");
        $row = mysqli_num_rows($query);
        if ($row == 1) {
            $_SESSION["loginpengguna"] = true;
            $_SESSION["email"] = $email;
            header("location: main_pengguna.php"); // pindah ke halaman lain
        } else {
            $error     = "NIM atau password anda salah";
        }
        mysqli_close($koneksi);
    }
}
