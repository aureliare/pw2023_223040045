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
        <div class="hero" style="background-image: url(../img/img3.jpeg) ;"></div>
        <div class="content">
            <h2>Menang Dramatis Adu Penalti, Bali United Raih Tiket Playoff LCA</h2>
            <p class="penulis">
                ditulis oleh <a href="#">aureliare</a>. Pada 9 November 2022.
            </p>

            <p>
                Jakarta - Real Madrid dikabarkan akan melepas satu pemain seniornya lagi. Nacho Fernandez
                disebut-sebut segera bergabung dengan Inter Milan.
                Masa depan bek berusia 33 tahun itu santer dipertanyakan karena kontraknya di Madrid akan
                habis pada akhir bulan ini. Sampai sekarang belum ada tanda-tanda Nacho akan mendapatkan kontrak baru.


            </p>

            <p>
                Sementara itu Inter membutuhkan pemain bertahan berpengalaman untuk musim depan. Nerazzurri
                segera ditinggalkan Milan Skriniar, yang akan menyeberang ke Paris Saint-Germain.
                Menurut sejumlah sumber di Spanyol, Inter Milan akan menggaet Nacho secara cuma-cuma setelah kontraknya selesai.
                Kabarnya Nacho telah menyepakati kontrak selama tiga tahun alias sampai musim panas 2026.
                Jika rumor itu benar adanya maka sudah lima pemain Real Madrid yang angkat kaki dari Santiago Bernabeu. Sebelumnya
                Madrid lebih dulu melepas Marco Asensio, Mariano Diaz, Eden Hazard, dan terakhir bintang sepakbola Prancis Karim Benzema.
                Nacho Fernandez adalah segelintir dari one man club di masa sepakbola modern. Nacho merintis karier dari tim junior Madrid,
                lalu Madrid Castilla, sebelum menjalani musim penuh pertamanya pada 2013/14.



            </p>

            <p>
                Secara keseluruhan Nacho Fernandez telah membuat 318 penampilan untuk Real Madrid dengan sumbangan 16 gol dan sembilan assist.
                Sebanyak 21 gelar juara dimenangi Nacho bersama Los Blancos, termasuk tiga LaLiga, dua Copa del Rey, dan lima Liga Champions.
                Pertandingan kandang melawan Athletic Bilbao malam ini (4/6) bisa jadi menjadi penampilan terakhir Nacho bersama Real Madrid. Pelatih Carlo
                Ancelotti belum lama ini mengungkapkan, Nacho akan menentukan masa depannya usai menyelesaikan musim.
                "Dia dan [Dani] Ceballos tahu apa yang kami inginkan dari mereka. Mereka sudah sangat jelas kok.
                Mereka akan menunggu sampai akhir musim untuk mengambil keputusan."

            </p>

            <a href="../welcome.php">kembali</a>
        </div>
        <div class="footer">
            <div class="copy">Copyright 2016. aureliare</div>
        </div>
    </div>
</body>

</html>