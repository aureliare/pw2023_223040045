<?php
session_start();

if (!isset($_SESSION['login2'])) {
    header("Location: ../login.php");
}

require '../config.php';

$berita = query("SELECT * FROM news");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM 
                news
            WHERE
                judul LIKE '%$keyword%' OR
                sinopsis LIKE '%$keyword%' OR
                isi LIKE '%$keyword%'
            ";

    $berita = query($query);
}

if (isset($_POST["cari"])) {
    $berita = cari($_POST["keyword"]);
}

?>

<?php require 'partials/head.php' ?>

<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group my-3">
                    <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search Student(s).." autofocus autocomplete="off">
                    <button class="btn btn-primary" type="submit" name="cari" id="cari">Search</button>
                </div>
                <a href="tambah.php" class="btn btn-primary">Tambah</a>
            </form>
        </div>

        <!-- <div class="row">
            <div class="col-md-6">
                <form action="" method="get">
                    <div class="input-group my-3">
                        <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search Student(s).." autofocus autocomplete="off">
                        <button class="btn btn-primary" type="submit" name="search" id="search-button">Search</button>
                    </div>

                </form>
            </div>
        </div> -->


        <div id="search-container">
            <?php if ($berita) : ?>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>Image</th>
                            <th>Judul</th>
                            <th>Sinopsis</th>
                            <th>Isi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($berita as $b) : ?>
                            <tr>
                                <td><?php $i++ ?></td>
                                <td><img src="../img/<?= $b['img']; ?>" width="200px" alt=""></td>
                                <td><?= $b['judul']; ?></td>
                                <td><?= $b['sinopsis']; ?></td>
                                <td><?= $b['isi']; ?></td>
                                <td>
                                    <a href="ubah.php?id=<?= $b['id']; ?>"><i class="fa-solid fa-pen-to-square" style="color: #0f131a;"></i></a>|
                                    <a href="hapus.php?id=<?= $b['id']; ?>"><i class="fa-sharp fa-solid fa-trash" style="color: #0a0c10;"></i></a>
                                </td>
                            <?php endforeach; ?>
                            </tr>

                    </tbody>
                </table>
            <?php else : ?>
                <div class="row">
                    <div class="col md -6">
                        <div class="alert alert-danger" role="alert">
                            Kategori not found!
                        </div>
                    </div>
                </div>

            <?php endif; ?>
        </div>

    </div>

    <?php require('partials/footer.php'); ?>