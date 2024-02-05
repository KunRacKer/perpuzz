<?php
include '../koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $No_telp = $_POST["No_telp"];
    
    // Query UPDATE data menu
    $query = "UPDATE petugas SET Nama_petugas = '$Name', Email = '$Email', No_telp = '$No_telp' WHERE ID_petugas = $ID_petugas";

    if ($koneksi->query($query) === TRUE) {
        echo "<script>alert('Profil Berhasil diperbarui!');</script>";
        header("Location: ../../view/admin/profile.php");
    } else {
        echo "Error updating data: " . $koneksi->error;
    }

    $koneksi->close();
}
?>
