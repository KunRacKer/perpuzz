<?php
include '../koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID_petugas = $_POST["ID_petugas"];
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $No_telp = $_POST["No_telp"];
    
    // Query UPDATE data menu
    $query = "UPDATE petugas SET Nama_petugas = '$Name', Email = '$Email', No_telp = '$No_telp' WHERE ID_petugas = $ID_petugas";

    if ($koneksi->query($query) === TRUE) {
        echo "<script>alert('Petugas Berhasil diperbarui!');</script>";
        header("Location: ../../view/admin/petugas.php");
    } else {
        echo "Error updating data: " . $koneksi->error;
    }

    $koneksi->close();
}
?>
