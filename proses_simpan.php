<?php
include 'koneksi.php';

// Menangkap data dari form
$nama        = $_POST['nama'];
$nim         = $_POST['nim'];
$jurusan     = $_POST['jurusan'];
$jkl         = $_POST['jenis_kelamin']; // Sesuai kolom 'Jkl' di database
$konsentrasi = $_POST['konsentrasi'];

// Query Input
$query = "INSERT INTO peserta (Nim, Nama, Jurusan, Jkl, Konsentrasi) 
          VALUES ('$nim', '$nama', '$jurusan', '$jkl', '$konsentrasi')";

if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Data berhasil disimpan!'); window.location='index.html';</script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>