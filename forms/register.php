<?php
include 'koneksi.php';

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan melalui POST
    $Email = $_POST['Email'];
    $Name = $_POST['Name'];
    $password = md5($_POST['password']);

    $rand = rand(1000,9999);

    // Membuat prepared statement
    $stmt1 = $koneksi->prepare("INSERT INTO user (Email, ID_anggota, `password`) VALUES (?, ?, ?)");
    $stmt1->bind_param("sis", $Email, $rand, $password); // s = string, i = integer, d = digit/real

    $stmt2 = $koneksi->prepare("INSERT INTO anggota (ID_anggota, Nama_anggota, Email) VALUES (?, ?, ?)");
    $stmt2->bind_param("iss", $rand, $Name, $Email);

    // Eksekusi prepared statement dan cek hasil
    if ($stmt1->execute() && $stmt2->execute()) {
        echo "<script>alert('Berhasil!! Silahkan Lanjut Login');</script>";
        header("Location: ../view/login.php");
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
