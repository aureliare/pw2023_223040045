<?php
define('BASE_URL', '/pw2023_223040045/kuliah/pertemuan13/');



$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'pw2023_223040045'
) or die('KONEKSI KE DATABASE GAGAL!');



function query($query)
{
  global $conn;
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

  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
  mahasiswa
  VALUES (null, '$nim', '$nama', '$email', '$jurusan', '$gambar') ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


function hapus($id)
{

  global $conn;
  $query = "DELETE FROM mahasiswa WHERE id = $id ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}




function ubah($data)
{
  global $conn;
  $id = $data['id'];
  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE  
              mahasiswa 
            SET
            nama ='$nama',
            email = '$email', 
            jurusan ='$jurusan', 
            gambar = '$gambar'
            WHERE id = $id
            ";

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
