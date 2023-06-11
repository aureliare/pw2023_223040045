<?php

include 'config.php';
session_start();


if (isset($_SESSION["login"])) {
	header("Location: welcome.php");
	exit;
}

if (isset($_SESSION["login2"])) {
	header("Location: admin/dashboard.php");
	exit;
}


if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

	// Cek username
	if (mysqli_num_rows($result) === 1) {
		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			if ($row["level"] == "user") {
				// set session
				$_SESSION["login"] = true;

				header("Location: welcome.php");
				exit;
			}
			if ($row["level"] == "admin") {
				// set session
				$_SESSION["login2"] = true;

				header("Location: admin/dashboard.php");
				exit;
			}
		}
	}

	$error = true;
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">

	<title>News</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="" placeholder="Username" name="username">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password">
			</div>
			<div class="input-group">
				<button name="login" type="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Belum memiliki Akun ? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>

</html>