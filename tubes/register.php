<?php

require "config.php";
if (isset($_POST["register"]) > 0) {
	if (registrasi($_POST) > 0) {
		echo "<script>
			alert('Username berhasil di tambahkan');
			document.location.href='login.php';
			</scirpt>";
	} else {
		echo mysqli_error($conn);
	}
}


?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">

	<title>Register Form </title>
</head>

<body style="background-image: 2.jpg;">
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Confirm Password" name="password2" required>
			</div>
			<input type="hidden" name="level" value="user">
			<div class="input-group">
				<button name="register" type="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Sudah Memiliki Akun ? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>

</html>