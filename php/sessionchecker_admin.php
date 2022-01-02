<?php
session_start();
if (!isset($_SESSION["loginadmin"])) {
	header("Location:login_admin.php");
	exit;
}
