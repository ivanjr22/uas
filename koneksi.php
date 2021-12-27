<?php
$host = '10.0.0.44';
$username = 'admin';
$password = 'Admin123_';
$database = 'ajc';
$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}
?>