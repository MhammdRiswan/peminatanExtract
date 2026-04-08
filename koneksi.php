<?php
$host     = "localhost"; // Biasanya localhost
$user     = "root";      // Username default MySQL
$password = "";          // Password default MySQL (kosong)
$database = "pra_extract";

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi Berhasil!"; // Aktifkan hanya untuk testing
?>