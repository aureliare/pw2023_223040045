<?php
session_start();


if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>NewsOR</title>
    <link rel="stylesheet" href="berita1.css" />
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="judul">NewsOR</h1>

        </div>
        <div class="hero" style="background-image: url(../img/img2.jpeg) ;"></div>
        <div class="content">
            <h2>Menang Dramatis Adu Penalti, Bali United Raih Tiket Playoff LCA</h2>
            <p class="penulis">
                ditulis oleh <a href="#">aureliare</a>. Pada 9 November 2022.
            </p>

            <p>
                Jakarta - Kejuaraan internasional AIDA akan digelar di Korea
                Selatan bertema World Championship. Ada enam atlet Indonesia yang akan berkompetisi!
            </p>

            <p>
                AIDA (International Association for the Development of Apnea) sudah menggelar perlombaan
                dunia freediving sejak tahun 1992. Kali ini di tahun 2023 tepatnya pada 10-17 Juni mendatang,
                ajang Kejuaraan Dunia AIDA Pool World Championship akan digelar di Jeju, Korea Selatan.
                Deniel Victorius selaku presiden AIDA Indonesia akan mengirim enam atlet untuk kejuaraan tersebut.
                Mereka adalah Nike Inayah ,Windy A Burhan, Ernaldo Sanyoto, Jovan Giovani, Mikhael Dominico, serta Safir Abadi.
            </p>

            <p>
                Mereka akan bersaing dengan para atlet dari 28 negara. Selasa (6/6), mereka berenam akan terbang ke Jeju.
                "Semoga saja dengan prestasi yang membanggakan pulang dari Jeju, pemerintah terbuka memberikan fasilitas
                yang baik untuk kami dan junior-junior ke depannya," harap Deniel Victorius.
            </p>

            <a href="../welcome.php">kembali</a>
        </div>
        <div class="footer">
            <div class="copy">Copyright 2023. aureliare</div>
        </div>
    </div>
</body>

</html>