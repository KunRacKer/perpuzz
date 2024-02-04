<?php
session_start(); // Start a session

// Database connection
include '../koneksi.php';

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}

// Retrieve form data
$Email = $_POST['Email'];
$password = md5($_POST['password']); // MD5 encryption

// Query to check user
$sql = "SELECT * FROM user WHERE Email = '$Email' AND `password` = '$password'";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    $_SESSION['Email'] = $row['Email'];
    $_SESSION['ID_anggota'] = $row['ID_anggota'];
    $_SESSION['ID_petugas'] = $row['ID_petugas'];

    // Redirect to dashboard or desired page
    header("Location: ../../view/admin/admin.php");
} else {
    // User not found, redirect back to login page
    header("Location: ../../view/login.php");
}

$koneksi->close();
?>
