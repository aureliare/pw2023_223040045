<?php
require '../config.php';
session_start();

if (!isset($_SESSION['login2'])) {
    header("Location: ../login.php");
}

if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('berita berhasil di tambahkan');
        document.location.href = 'berita.php';
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<?php require 'partials/head.php' ?>

<main class="mt-5 pt-3">
    <div class="container-fluid" id="container">
        <h1>Tambah Berita</h1>

        <form action="" method="post" enctype="multipart/form-data" class="box-input">
            <div class="mb-3">
                <label for="img" class="form-label">Masukan gambar</label>
                <input class="form-control" type="file" id="img" name="img">
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label">judul berita</label>
                <input class="form-control" type="text" id="judul" name="judul">
            </div>
            <div class="mb-3">
                <label for="sinopsis" class="form-label">Sinopsi</label>
                <input class="form-control" type="text" id="sinopsis" name="sinopsis">
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi berita</label>
                <textarea class="form-control" rows="3" id="isi" name="isi"></textarea>
            </div>
            <div class="button">
                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
            </div>

        </form>
    </div>

    </body>

    </html>