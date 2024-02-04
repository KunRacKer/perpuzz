<?php
session_start();

include 'koneksi.php';

if (isset($_GET['ISBN_ISSN'])) {
    $No_pinjam = $_GET["No_pinjam"];
    $ISBN_ISSN = $_GET["ISBN_ISSN"];
    
    // Mendapatkan Tgl_kembali yang sudah ada
    $query_get_tgl_kembali = "SELECT Tgl_kembali FROM mendata WHERE No_pinjam = $No_pinjam";
    $result_get_tgl_kembali = $koneksi->query($query_get_tgl_kembali);

    if ($result_get_tgl_kembali) {
        $row = $result_get_tgl_kembali->fetch_assoc();
        $tgl_kembali_sebelumnya = $row['Tgl_kembali'];

        // Menambahkan 1 bulan ke Tgl_kembali sebelumnya
        $tgl_kembali_baru = date('Y-m-d', strtotime($tgl_kembali_sebelumnya . ' +1 month'));

        // Query UPDATE data menu
        $query = "UPDATE mendata SET Tgl_kembali = '$tgl_kembali_baru' WHERE No_pinjam = $No_pinjam";

        if ($koneksi->query($query) === TRUE) {
            echo "<script>alert('Profil Berhasil diperbarui!');</script>";
            header("Location: ../view/listbuku.php");
        } else {
            echo "Error updating data: " . $koneksi->error;
        }
    } else {
        echo "Error fetching data: " . $koneksi->error;
    }

    $koneksi->close();
}
?>
