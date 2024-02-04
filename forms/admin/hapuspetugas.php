<?php

include '../koneksi.php';

if (isset($_GET['ID_petugas'])) {
    $id = $_GET['ID_petugas'];
    
    // Perform the delete operation
    $delete_query = "DELETE FROM petugas WHERE ID_petugas = '$id' ";
    if (mysqli_query($koneksi, $delete_query)) {
        // Redirect back to the Meja.php page after successful deletion
        header('Location: ../../view/admin/petugas.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    echo "No record to delete.";
}
?>