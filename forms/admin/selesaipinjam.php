<?php

include '../koneksi.php';

if (isset($_GET['No_pinjam'])) {
    $id = $_GET['No_pinjam'];
    
    // Perform the delete operation
    $delete_query = "DELETE FROM mendata WHERE No_pinjam = '$id' ";
    if (mysqli_query($koneksi, $delete_query)) {
        // Redirect back to the Meja.php page after successful deletion
        header('Location: ../../view/admin/mendata.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    echo "No record to delete.";
}