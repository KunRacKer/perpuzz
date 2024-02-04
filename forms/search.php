<?php
session_start();

include 'koneksi.php';

// Check connection
if ($koneksi->connect_error) {
  die("Koneksi Gagal: " . $koneksi->connect_error);
}

$column = $_POST['column'];
$search = $_POST['search'];

$sql = "SELECT Judul FROM buku WHERE Judul LIKE '%$search%'";
$result = $koneksi->query($sql);

?>
