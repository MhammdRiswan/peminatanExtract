<?php
include 'koneksi.php';

$nama        = $_POST['nama'];
$nim         = $_POST['nim'];
$jurusan     = $_POST['jurusan'];
$jkl         = $_POST['jenis_kelamin'];
$konsentrasi = $_POST['konsentrasi'];

$query = "INSERT INTO peserta (Nim, Nama, Jurusan, Jkl, Konsentrasi) 
          VALUES ('$nim', '$nama', '$jurusan', '$jkl', '$konsentrasi')";

if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Data berhasil disimpan!'); window.location='index.html';</script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>