<?php

//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "contact_database";

// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi Tidak berhasi : " .mysqli_connect_error().
        " - ".mysqli_connect_error());
}
?>