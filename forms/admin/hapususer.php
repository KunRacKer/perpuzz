<?php

include '../koneksi.php';

if (isset($_GET['ID_anggota'])) {
    $id = $_GET['ID_anggota'];
    
    // Perform the delete operation
    $delete_query = "DELETE FROM anggota WHERE ID_anggota = '$id' ";
    if (mysqli_query($koneksi, $delete_query)) {
        // Redirect back to the Meja.php page after successful deletion
        header('Location: ../../view/admin/user.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    echo "No record to delete.";
}
?>