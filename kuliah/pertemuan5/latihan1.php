<?php
//array = variable yg dapaat menampung banyak nilai


//membuat array
$hari = array('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu');
$bulan = ['januari', 'februari', 'maret'];
$myArray = ['Aurelia', 10, false];
$binatang = ['🐈', '🐇', '🐒', '🐨', '🐮'];


//mencetak array
var_dump($hari);
print_r($bulan);
var_dump($myArray);
echo $binatang[4];

echo "<hr>";

//manipulasi array

//menambah elemen diakhir array
$bulan[] = 'april';
$bulan[] = 'mei';
print_r($bulan);

echo "<hr>";

array_push($bulan, 'juni', ' juli');
print_r($bulan);

echo "<hr>"

//menambah elemen diawal array
array_unshift($binatang, '🐍', '🐤');
print_r($binatang);

echo "<hr>"

//menghapus elemen diakhir array
array_pop($hari)
print_r ($hari);

echo"<hr>"

//menghapus elemen diawal array
array_shift($hari);
ptint_r ($hari);


