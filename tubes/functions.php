function registrasi($data) {
global $conn;

$username = strtolower(striplashes ($data["username"]));
$password = mysqli_real_eacpe_string($conn, $data["password"]);
$password2 = mysqli_real_eacpe_string($conn, $data["password"]);
$email = mysqli_real_eacpe_string($data["password"]);

//cek konfirmasi password
if( $password !== $password2 ){
echo "<script>
    alert('password tidak sesuai!');
</script>";

return false;
}
}