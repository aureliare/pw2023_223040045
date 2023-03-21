<?php
$mahasiswa = [

    [
        "nama" => "Aurelia Melati Suci",
        "nrp" => "223040045",
        "email" => "aureliamel@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "aurel.png"
    ],

    [
        "nama" => "Febi Alia Rahman",
        "nrp" => "223040059",
        "email" => "febialia@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "febi.jpg"
    ],

    [
        "nama" => "Angga Nugraha Sofyan",
        "nrp" => "223040052",
        "email" => "angganugraha@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "angga.jpg"
    ],

    [
        "nama" => "Ji'ta Bilhaq",
        "nrp" => "223040055",
        "email" => "jita@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "jita.jpg"
    ],

    [
        "nama" => "Lisvindanu",
        "nrp" => "223040038",
        "email" => "lisvindanu@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "danu.jpg"
    ],

    [
        "nama" => "Fakih Helmi Maulana",
        "nrp" => "223040056",
        "email" => "fakihhelmi@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "fakih.jpg"
    ],

    [
        "nama" => "Ivan Bayu Pratama",
        "nrp" => "223040057",
        "email" => "ivanbayu@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ivan.jpg"
    ],

    [
        "nama" => "Muhammad Rifki Ramadhani",
        "nrp" => "223040046",
        "email" => "rifkiramadhani@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "iki.jpg"
    ],

    [
        "nama" => "Hedi Sukur",
        "nrp" => "223040071",
        "email" => "hedisukur@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "hedi.jpg"
    ],

    [
        "nama" => "Muhammad Daffa Riyadi",
        "nrp" => "223040120",
        "email" => "daffariyadi@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "daffa.jpg"
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <img src="img/<?= $mhs["gambar"]; ?>" width="120" height="200">
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nrp : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>

        </ul>

    <?php endforeach; ?>
</body>

</html>