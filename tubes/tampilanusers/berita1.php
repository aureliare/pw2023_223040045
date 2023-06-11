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
    <link rel="stylesheet" href="./berita1.css" />
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="judul">NewsOR</h1>
            <!-- <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">about</a></li>
                <li><a href="#">products</a></li>
                <li><a href="#">services</a></li>
                <li><a href="#">contact</a></li>
            </ul> -->
        </div>
        <div class="hero"></div>
        <div class="content">
            <h2>Hasil Sprint Race MotoGP Italia 2023: Bagnaia Menang, Marquez Ketujuh</h2>
            <p class="penulis">
                ditulis oleh <a href="#">aureliare</a>. Pada 9 November 2022.
            </p>

            <p>
                Jakarta - Korea sempurna di final Thailand Open 2023.
                Wakil-wakil Korea memenangi semua pertandingannya untuk meraih tiga gelar,
                sedangkan Indonesia bertangan hampa.



            </p>

            <p>
                Gelar pertama Korea diraih di nomor tunggal putri. Unggulan teratas An Se Young berhasil mengalahkan
                pebulutangkis China unggulan ketiga He Bing Jiao 21-10, 21-19 di Stadion Huamark, Minggu (4/6).
                Ganda campuran Kim Won Ho/Jeong Na Eun memenangi gelar kedua Korea. Memainkan partai kedua,
                unggulan kelima ini sukses menjungkalkan unggulan pertama sekaligus wakil tuan rumah Dechapol
                Puavaranukroh/Sapsiree Terattachanai dalam duel seru tiga gim.


            </p>

            <p>
                Kim/Jeong comeback dari kekalahan telak di gim pertama, lalu berbalik untuk
                mengalahkan lawan usai melewati dua gim yang ketat. Kim/Jeong akhirnya menang dengan skor akhir 11-21, 21-19, 22-20.
                Korea menempatkan ganda putri sebagai wakil terakhirnya di final Thailand Open 2023. Unggulan pertama Kim Se Yeong/Kong
                Hee Yong sukses menang relatif mudah atas ganda Thailand Benyapa Aimsaard/Nuntakarn Aimsaard 21-13, 21-17.
                Ganda putra Bagas Maulana/Muhammad Shohibul Fikri menjadi satu-satunya wakil Indonesia.
                Sayang sekali Bagas/Fikri tak kuasa membendung unggulan ketiga Liang Wei Keng/Wang Chang sehingga kalah dua gim langsung 10-21, 15-21.



            </p>

            <a href="../welcome.php">kembali</a>
        </div>
        <div class="footer">
            <div class="copy">Copyright 2023. aureliare</div>
        </div>
    </div>
</body>

</html>