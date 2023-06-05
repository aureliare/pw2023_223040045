<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <title>News</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="indexlogin.php">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">|</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Daftar</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="main">
            <div class="home">
                <div class="left">
                    <img src="img/news.jpg" class="home-img" alt="Paper photo" />

                    <h2 class="heading-2">Lorem ipsum dolor sit amet consectetur adipisicing elit cupiditate possimus.</h2>
                </div>

                <div class="right">
                    <h3 class="heading-3">latest news</h3>
                    <div class="lists">
                        <div class="list">
                            <img src="img/list-img-1.jpg" alt="photo 1" />
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio, veritatis!</p>
                        </div>

                        <div class="list">
                            <img src="img/list-img-2.jpg" alt="photo 2" />
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio, veritatis!</p>
                        </div>

                        <div class="list">
                            <img src="img/list-img-3.jpg" alt="photo 3" />
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio, veritatis!</p>
                        </div>

                        <div class="list">
                            <img src="img/list-img-4.jpg" alt="photo 4" />
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio, veritatis!</p>
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
                <a href="indexlogin.php" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
        </div>

        <div class="card" style="width: 20rem">
            <img src="img/img2.jpeg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">6 Atlet Freediving Indonesia Akan Berlaga di Korea Selatan</h5>
                <p class="card-text">Kejuaraan internasional AIDA akan digelar di Korea Selatan bertema World Championship. Ada enam atlet...</p>
                <a href="indexlogin.php" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
        </div>

        <div class="card" style="width: 20rem">
            <img src="img/img3.jpeg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Nacho Akan Hengkang dari Madrid, Menuju Inter Milan</h5>
                <p class="card-text">Real Madrid dikabarkan akan melepas satu pemain seniornya lagi. Nacho Fernandez disebut-sebut segera bergabung....</p>
                <a href="indexlogin.php" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
        </div>

        <div class="card" style="width: 20rem">
            <img src="img/img4.jpeg" class="card-img-top" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Final NBA 2023: Nuggets Bungkam Heat untuk Rebut Gim 1/</h5>
                <p class="card-text">Denver Nuggets membungkam Miami Heat untuk merebut gim pertama final NBA 2022/2023. Penampilan kolektif Nuggets memenangkan...</p>
                <a href="indexlogin.php" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="copyrights">Copyrights &copy; 2022 Coders Villa</div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>