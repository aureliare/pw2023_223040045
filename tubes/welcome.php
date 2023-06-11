<?php

session_start();


if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <title>News0R</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">NewsOR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">|</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Daftar</a>
                        </li>


                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="main">
            <div class="home">
                <div class="left">
                    <img src="img/img5.jpeg" class="home-img" alt="Paper photo" />

                    <a href="https://www.cnnindonesia.com/olahraga/20230610193912-156-960174/hasil-sprint-race-motogp-italia-2023-bagnaia-menang-marquez-ketujuh" class="heading-2 text-decoration-none " style="color : black">Hasil Sprint Race MotoGP Italia 2023: Bagnaia Menang, Marquez Ketujuh</a>
                </div>

                <div class="right">
                    <h3 class="heading-3">Terpopuler</h3>
                    <div class="lists">
                        <div class="list">
                            <img src="img/img5.jpeg" alt="photo 1" />
                            <a href=" https://www.cnnindonesia.com/olahraga/20230610193912-156-960174/hasil-sprint-race-motogp-italia-2023-bagnaia-menang-marquez-ketujuh" class="text-decoration-none" style="color : black">Hasil Sprint Race MotoGP Italia 2023: Bagnaia Menang, Marquez Ketujuh</a>
                        </div>

                        <div class="list">
                            <img src="img/img6.jpeg" alt="photo 2" />
                            <a href="https://www.cnnindonesia.com/olahraga/20230610193134-142-960172/menang-dramatis-adu-penalti-bali-united-raih-tiket-playoff-lca" class="text-decoration-none" style="color : black">Menang Dramatis Adu Penalti, Bali United Raih Tiket Playoff LCA</a>
                        </div>

                        <div class="list">
                            <img src="img/img7.jpeg" alt="photo 3" />
                            <a href="https://www.cnnindonesia.com/olahraga/20230610193546-170-960173/kunlavut-retired-ginting-ke-final-singapore-open-2023" class="text-decoration-none" style="color : black">Kunlavut Retired, Ginting ke Final Singapore Open 2023</a>
                        </div>

                        <div class="list">
                            <img src="img/img8.jpeg" alt="photo 4" />
                            <a href="https://www.cnnindonesia.com/olahraga/20230610205614-142-960183/sty-pastikan-sandy-walsh-absen-di-indonesia-vs-palestina-dan-argentina" class="text-decoration-none" style="color : black">STY Pastikan Sandy Walsh Absen di Indonesia vs Palestina dan Argentina</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cards">

        <div class="card" style="width: 20rem">
            <img src="img/img1.jpeg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Thailand Open 2023: Korea Rebut 3 Gelar</h5>
                <p class="card-text">Jakarta - Korea sempurna di final Thailand Open 2023. Wakil-wakil Korea memenangi semua pertandingannya untuk meraih...</p>
                <a href="tampilanusers/berita1.php" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
        </div>

        <div class="card" style="width: 20rem">
            <img src="img/img2.jpeg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">6 Atlet Freediving Indonesia Akan Berlaga di Korea Selatan</h5>
                <p class="card-text">Kejuaraan internasional AIDA akan digelar di Korea Selatan bertema World Championship. Ada enam atlet...</p>
                <a href="tampilanusers/berita2.php" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
        </div>

        <div class="card" style="width: 20rem">
            <img src="img/img3.jpeg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Nacho Akan Hengkang dari Madrid, Menuju Inter Milan</h5>
                <p class="card-text">Real Madrid dikabarkan akan melepas satu pemain seniornya lagi. Nacho Fernandez disebut-sebut segera bergabung....</p>
                <a href="tampilanusers/berita3.php" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
        </div>

        <div class="card" style="width: 20rem">
            <img src="img/img4.jpeg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Final NBA 2023: Nuggets Bungkam Heat untuk Rebut Gim 1/</h5>
                <p class="card-text">Denver Nuggets membungkam Miami Heat untuk merebut gim pertama final NBA 2022/2023. Penampilan kolektif Nuggets memenangkan...</p>
                <a href="tampilanusers/berita4.php" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="copyrights">Copyrights 2023 aureliare</div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>