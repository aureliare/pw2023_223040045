<?php

$conn = mysqli_connect("localhost", "root", "", "user");

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

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $email = $data["email"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $level = $data["level"];

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('username sudah terdaftar!')
			  </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
				alert('konfirmasi password tidak sesuai')
			  </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`)
	VALUES(null, '$username', '$email', '$password', '$level')");

    return mysqli_affected_rows($conn);
}

function ubah_user($data)
{
    global $conn;

    $id = $data["id"];
    $username = strtolower(stripcslashes($data["username"]));
    $email = $data["email"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $level = $data["level"];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE users SET
				id = '$id', 
				username = '$username',
				email = '$email',
				`password` = '$password',
                `level` = '$level'
			WHERE id = $id
			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus_user($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM users WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}



function tambah($data)
{
    global $conn;

    $img = upload();
    if (!$img) {
        return false;
    }
    $judul = htmlspecialchars($data["judul"]);
    $sinopsis = htmlspecialchars($data["sinopsis"]);
    $isi = htmlspecialchars($data["isi"]);

    $query = "INSERT INTO news
				VALUES
				(null, '$img', '$judul', '$sinopsis', '$isi')
			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $nameFile = $_FILES['img']['name'];
    $ukuranFile = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmpName = $_FILES['img']['tmp_name'];

    if ($error === 4) {
        echo "<script>
		alert('masukan foto terlebih dahulu'); 
		</script>";
        return false;
    }


    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
    $ekstensiGambar = explode('.', $nameFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
		alert('yang anda uplod bukan gambar '); 
		</script>";
        return false;
    }

    if ($ukuranFile > 1000000) {
        echo "<script>
		alert('ukuran gambar terlalu besar '); 
		</script>";
        return false;
    }

    // memindahkan file
    move_uploaded_file($tmpName, '../img/' . $nameFile);
    return $nameFile;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM news WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = htmlspecialchars($data["id"]);
    $img = upload();
    if (!$img) {
        return false;
    }
    $judul = htmlspecialchars($data["judul"]);
    $sinopsis = htmlspecialchars($data["sinopsis"]);
    $isi = htmlspecialchars($data["isi"]);

    $query = "UPDATE news SET
				id = '$id', 
				img = '$img',
				judul = '$judul',
				sinopsis = '$sinopsis',
				isi = '$isi'
			WHERE id = $id
			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM news
				WHERE
			  judul LIKE '%$keyword%' OR
			  sinopsis LIKE '%$keyword%' OR
			  isi LIKE '%$keyword%' 
			";
    return query($query);
}
