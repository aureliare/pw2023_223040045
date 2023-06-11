<?php
session_start();

if (!isset($_SESSION['login2'])) {
    header("Location: ../login.php");
}
?>

<?php require 'partials/head.php' ?>

<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Dashboard</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card bg-primary text-white h-100">
                    <div class="card-header">User/Admin</div>
                    <div class="card-body">
                        <!-- <h5 class="card-title">Primary Card</h5> -->
                        <h5 class="card-text">Table Pengguna</h5>
                    </div>
                    <div class="card-footer d-flex">
                        <a href="user.php" style="text-decoration: none; color:white"> Lihat Table </a>
                        <span class="ms-auto">
                            <i class="bi bi-chevron-right"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card bg-primary text-white h-100">
                    <div class="card-header">Berita</div>
                    <div class="card-body">
                        <!-- <h5 class="card-title">Primary Card</h5> -->
                        <h5 class="card-text">Table Kategori</h5>
                    </div>
                    <div class="card-footer d-flex">
                        <a href="berita.php" style="text-decoration: none; color:white">Lihat Table</a>
                        <span class="ms-auto">
                            <i class="bi bi-chevron-right"></i>
                        </span>
                    </div>
                </div>
            </div>

            <?php require('partials/footer.php'); ?>