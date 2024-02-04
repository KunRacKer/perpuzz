<?php

include 'koneksi.php';

if (isset($_GET['ISBN_ISSN'])) {
    $id = $_GET['ISBN_ISSN'];
    
    // Perform the delete operation
    $delete_query = "DELETE FROM mendata WHERE ISBN_ISSN = '$id' ";
    if (mysqli_query($koneksi, $delete_query)) {
        // Redirect back to the Meja.php page after successful deletion
        header('Location: ../view/listbuku.php');
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    echo "No record to delete.";
}