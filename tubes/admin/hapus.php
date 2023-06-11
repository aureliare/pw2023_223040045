<?php
session_start();

if (!isset($_SESSION['login2'])) {
    header("Location: ../login.php");
}

require '../config.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "<script>
        alert('berita berhasil di hapus');
        document.location.href = 'berita.php';
        </script>";
}
