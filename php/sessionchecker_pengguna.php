<?php
session_start();
if (!isset($_SESSION["loginpengguna"])) {
	header("Location:login_pengguna.php");
	exit;
}
