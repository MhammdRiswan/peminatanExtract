<?php
include 'koneksi.php';

// Pastikan data dikirim via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Menangkap data dengan filter dasar untuk keamanan
    $nama        = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $nim         = mysqli_real_escape_string($koneksi, $_POST['nim']);
    $jurusan     = mysqli_real_escape_string($koneksi, $_POST['jurusan']);
    $jkl         = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    $konsentrasi = mysqli_real_escape_string($koneksi, $_POST['konsentrasi']);

    // Query Input ke tabel 'peserta'
    // Sesuaikan Nama Kolom (Nim, Nama, Jurusan, Jkl, Konsentrasi) sesuai gambar database Anda
    $query = "INSERT INTO peserta (Nim, Nama, Jurusan, Jkl, Konsentrasi) 
              VALUES ('$nim', '$nama', '$jurusan', '$jkl', '$konsentrasi')";

    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, muncul alert dan kembali ke halaman utama
        echo "<script>
                alert('Pendaftaran Berhasil!');
                window.location.href='index.php';
              </script>";
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Gagal menyimpan: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>