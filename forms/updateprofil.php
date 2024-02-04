<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID_anggota = $_POST["ID_anggota"];
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $No_telp = $_POST["No_telp"];
    $Alamat = $_POST["Alamat"];

    // Query UPDATE data menu
    $query = "UPDATE anggota SET Nama_anggota = '$Name', Email = '$Email', No_telp = '$No_telp', Alamat = '$Alamat' WHERE ID_anggota = $ID_anggota";

    if ($koneksi->query($query) === TRUE) {
        echo "<script>alert('Profil Berhasil diperbarui!');</script>";
        header("Location: ../view/profile.php");
    } else {
        echo "Error updating data: " . $koneksi->error;
    }

    $koneksi->close();
}
?>
