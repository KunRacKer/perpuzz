<?php

include '../koneksi.php';

if (isset($_GET['ID_petugas'])) {
    $id = $_GET['ID_petugas'];
    
    // Membuat prepared statement
    $stmt1 = $koneksi->prepare("DELETE FROM petugas WHERE ID_petugas = ?");
    $stmt1->bind_param("s", $id); // s = string, i = integer, d = digit/real

    $stmt2 = $koneksi->prepare("DELETE FROM user WHERE ID_petugas = ?");
    $stmt2->bind_param("s", $id);

    // Eksekusi prepared statement dan cek hasil
    if ($stmt1->execute() && $stmt2->execute()) {
        // Redirect back to the Meja.php page after successful deletion
        header("Location: ../../view/admin/petugas.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    echo "No record to delete.";
}

mysqli_close($koneksi);
?>