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
        <div class="hero" style="background-image: url(../img/img4.jpeg) ;"></div>
        <div class="content">
            <h2>STY Pastikan Sandy Walsh Absen di Indonesia vs Palestina dan Argentina</h2>
            <p class="penulis">
                ditulis oleh <a href="#">aureliare</a>. Pada 9 November 2022.
            </p>

            <p>
                Denver - Denver Nuggets membungkam Miami Heat untuk merebut gim pertama final NBA 2022/2023.
                Penampilan kolektif Nuggets memenangkan mereka 104-93
                Partai pertama final NBA musim ini digelar di Ball Arena, Denver, Jumat (2/6/2023).
                Nuggets memulai dengan apik dan hanya kehilangan kuarter terakhir.
                Nuggets tampil disiplin dan secara kolektif mendulang poin-poin.
                Sementara Miami Heat kewalahan dan kesulitan menembak.

            </p>

            <p>
                Caleb Martin hanya mencatatkan satu tembakan berhasil dari tujuh upaya.
                Sementara Max Strus malah tak berhasil mencetak angka dari 10 tembakan,
                yang sembilan di antaranya dari upaya three point.
                Kemenangan Nuggets dipimpin kegemilangan Nikola Jokic,
                yang mencetak triple-double. Pemain center itu membukukan 27 poin, 10 rebound, dan 14 assist.
                Kecuali Kentavious Caldwell-Pope, seluruh starter Nuggets menembus dua digit poin.
                Jamal Murray mencatatkan 26 angka dan 10 assist.

            </p>

            <p>
                "Saya rasa inilah keindahan tim kami. Kami punya begitu banyak senjata dan wajah berbeda.
                Jadi Anda harus menjaga semua orang," ungkap Jamal Murray dikutip ESPN.
                "Kami bermain mengalir dan ini sangat menyenangkan," imbuhnya.
                Gim kedua final NBA 2022/2023 akan kembali digelar di Denver pada 5 Juni mendatang.
                ESPN mencatat hampir 70% pemenang gim pertama menjadi juara.


            </p>

            <a href="../welcome.php">kembali</a>
        </div>
        <div class="footer">
            <div class="copy">Copyright 2016. aureliare</div>
        </div>
    </div>
</body>

</html>