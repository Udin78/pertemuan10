<?php
$server = "localhost";
$user = "username_basisdata";
$pass = "password_basisdata";
$database = "nama_basisdata";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("koneksi ke database gagal:" . mysqli_connect_error());
}
?>