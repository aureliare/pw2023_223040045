<?php
session_start();

if (!isset($_SESSION['login2'])) {
    header("Location: ../login.php");
}

require '../config.php';

$id = $_GET["id"];

if (hapus_user($id) > 0) {
    echo "<script>
        alert('user berhasil di hapus');
        document.location.href = 'user.php';
        </script>";
}
