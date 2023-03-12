<?php
//mengecek apakah sebuah bilangan ganjil atau genap

$angka = 10;
//jika angka dibagi 2, sisanya 1 maka ganjil

function cek_ganjil_genap($angka) //parameter


{
    if ($angka % 2 == 1) {
        return "$angka adalah bilangan ganjil!";
    } else { //selain dari itu
        return "$angka adalah bilangan genap!";
    }
}


echo cek_ganjil_genap(11); //argumen adalah nilai yg saat dipanggil atau nilai asli
echo "<br>";
echo cek_ganjil_genap(5);
echo "<br>";
echo cek_ganjil_genap(10);
