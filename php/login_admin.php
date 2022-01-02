<?php
require 'server/adminlog_serv.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="login-utama">

		<div class="kiri">

			<!-- login form -->
			<form class="login-form" action="" method="post">
				<img style="width: 40%" src="../img/logo.png">
				<div class="login-field">
					<h1 class="form-title">Login Admin</h1>
				</div>
				<div class="login-field">
					<h5 class="form-input-label">
						NIP</h5>
					<input class="form-input" type="nip" id="nip" name="nip" placeholder="masukan nip" required></input>
				</div>

				<div class="login-field">
					<h5 class="form-input-label">
						Password</h5>
					<input class="form-input" type="password" id="password" name="password" placeholder="masukan password" required></input>
				</div>

				<div class="login-field">
					<button class="submit-btn" value="login" type="submit" name="submit">Login</button>

					<p class="form-info-text">Login sebagai <a href="login_pengguna.php">Pengguna</a></p>
					<span><?php echo $error; ?></span>

					<p class="form-info-text">Jika bermasalah, silahkan email <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCKCGDBdjsSDRZlpLzvLDsvgGPJhRxmcsXbNJSFkwgrQFpKFjFjFRlgVlMbKknJKJjDXfWZg">RENTS</a> </p>

				</div>
			</form>

		</div>
	</div>
	<!-- pesan error -->


</body>

</html>