<?php
include '../koneksi.php';

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan melalui POST
    $Email = $_POST['Email'];
    $Name = $_POST['Name'];
    $No_telp = $_POST['No_telp'];
    $password = md5($_POST['password']);

    $rand = rand(1000,9999);

    // Membuat prepared statement
    $stmt1 = $koneksi->prepare("INSERT INTO user (Email, ID_petugas, `password`) VALUES (?, ?, ?)");
    $stmt1->bind_param("sis", $Email, $rand, $password); // s = string, i = integer, d = digit/real

    $stmt2 = $koneksi->prepare("INSERT INTO petugas (ID_petugas, Nama_petugas, Email, No_telp) VALUES (?, ?, ?, ?)");
    $stmt2->bind_param("isss", $rand, $Name, $Email, $No_telp);

    // Eksekusi prepared statement dan cek hasil
    if ($stmt1->execute() && $stmt2->execute()) {
        echo "<script>alert('Berhasil!!');</script>";
        header("Location: ../../view/admin/petugas.php");
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
