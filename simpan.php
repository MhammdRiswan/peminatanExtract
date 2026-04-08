<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama        = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $nim         = mysqli_real_escape_string($koneksi, $_POST['nim']);
    $jurusan     = mysqli_real_escape_string($koneksi, $_POST['jurusan']);
    $jkl         = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    $konsentrasi = mysqli_real_escape_string($koneksi, $_POST['konsentrasi']);

    $query = "INSERT INTO peserta (Nim, Nama, Jurusan, Jkl, Konsentrasi) 
              VALUES ('$nim', '$nama', '$jurusan', '$jkl', '$konsentrasi')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Pendaftaran Berhasil!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Gagal menyimpan: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>