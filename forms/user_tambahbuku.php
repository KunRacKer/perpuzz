<?php
session_start();

include 'koneksi.php';

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_GET['ISBN_ISSN'])) {
    // Ambil data yang dikirimkan melalui POST
    $rand = rand(1000, 9999);
    $ID_anggota = $_SESSION['ID_anggota'];
    $ID_petugas = $_GET['ID_petugas'];
    $ISBN_ISSN = $_GET['ISBN_ISSN'];
    $Tgl_pinjam = date("Y-m-d");
    $Tgl_kembali = date('Y-m-d', strtotime('+1 month'));
    
    // Perintah SQL INSERT
    $sql = "INSERT INTO mendata (No_pinjam, ID_anggota, ID_petugas, ISBN_ISSN, Tgl_pinjam, Tgl_kembali) VALUES ('$rand', '$ID_anggota', '$ID_petugas', '$ISBN_ISSN', '$Tgl_pinjam', '$Tgl_kembali')";

    if ($result = $koneksi->query($sql)) {
        echo "<script>alert('Buku berhasil ditambahkan!');</script>";
        header("Location: ../view/listbuku.php");
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
