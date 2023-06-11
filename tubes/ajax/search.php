<?php
require '../config.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
                news
            WHERE
                judul LIKE '%$keyword%' OR
                sinopsis LIKE '%$keyword%' OR
                isi LIKE '%$keyword%'
            ";

$berita = query($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c45ed65471.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>


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
                    Kategori tidak ditemukan!
                </div>
            </div>
        </div>

    <?php endif; ?>