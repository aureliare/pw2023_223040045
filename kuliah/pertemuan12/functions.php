<?php
define('BASE_URL', '/pw2023_223040045/kuliah/pertemuan12/');

$conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040045') or die('KONEKSI KE DB GAGAL!');

// function koneksi()
// {
//   $conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040045') or die('KONEKSI KE DB GAGAL!');

//   return $conn;
// }

function query($query)
{
  global $conn;
  // $conn = koneksi();
  $result = mysqli_query($conn, $query);


  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {

    $rows[] = $row;
  }
  return $rows;
}


function tambah($data)
{
  global $conn;

  $nim = $data['nim'];
  $nama = $data['nama'];
  $email = $data['email'];
  $jurusan = $data['jurusan'];
  $gambar = $data['gambar'];


  $query = "INSERT INTO
              mahasiswa
              VALUES (null, '$nim', '$nama', '$email', '$jurusan', '$gambar')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
