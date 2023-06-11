<?php
require '../config.php';
session_start();

if (!isset($_SESSION['login2'])) {
    header("Location: ../login.php");
}

$id = $_GET["id"];

$id = query("SELECT * FROM users WHERE id = $id")[0];

if (isset($_POST["ubah"])) {
    if (ubah_user($_POST) > 0) {
        echo "<script>
        alert('user berhasil di ubah');
        document.location.href = 'user.php';
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<?php require 'partials/head.php' ?>

<main class="mt-5 pt-3">
    <div class="container-fluid" id="container">
        <h1>Ubah USer</h1>

        <form action="" method="post" enctype="multipart/form-data" class="box-input">
            <input type="hidden" name="id" value="<?= $id["id"] ?>">
            <div class="mb-3">
                <label for="img" class="form-label">Username</label>
                <input class="form-control" type="text" id="img" name="username" value="<?= $id["username"]; ?>">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">Email</label>
                <input class="form-control" type="text" id="judul" name="email" value="<?= $id["email"]; ?>">
            </div>
            <div class="mb-3">
                <label for="sinopsis" class="form-label">Password</label>
                <input class="form-control" type="password" id="sinopsis" name="password" value="<?= $id["password"]; ?>">
            </div>
            <input type="hidden" name="level" value="<?= $id["level"]; ?>">
            <div class="button">
                <button type="submit" name="ubah" class="btn btn-primary">ubah User</button>
            </div>

        </form>
    </div>

    </body>

    </html>