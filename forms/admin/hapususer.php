<?php

include '../koneksi.php';

if (isset($_GET['ID_anggota'])) {
    $id = $_GET['ID_anggota'];
    
    // Membuat prepared statement
    $stmt1 = $koneksi->prepare("DELETE FROM anggota WHERE ID_anggota = ?");
    $stmt1->bind_param("s", $id); // s = string, i = integer, d = digit/real

    $stmt2 = $koneksi->prepare("DELETE FROM user WHERE ID_anggota = ?");
    $stmt2->bind_param("s", $id);

    // Eksekusi prepared statement dan cek hasil
    if ($stmt1->execute() && $stmt2->execute()) {
        // Redirect back to the Meja.php page after successful deletion
        header("Location: ../../view/admin/user.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    echo "No record to delete.";
}

mysqli_close($koneksi);
?>