<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID_anggota = $_POST["ID_anggota"];
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $No_telp = $_POST["No_telp"];
    $Alamat = $_POST["Alamat"];

    // // Cek apakah ada gambar baru yang diunggah
    // if ($_FILES["pic"]["name"]) {
    //     $nama_file = $_FILES["pic"]["name"];
    //     $nama_sementara = $_FILES["pic"]["tmp_name"];
    //     $folder_simpan = "img/";

    //     // Buat nama file unik untuk menghindari tumpang tindih
    //     $gambarbaru = uniqid() . "_" . $nama_file;

    //     // Pindahkan gambar ke folder "img"
    //     if (move_uploaded_file($nama_sementara, $folder_simpan . $gambarbaru)) {
    //         // Hapus gambar lama jika ada
    //         $query_get_old_pic = "SELECT pic FROM tbl_menu WHERE id = $id_menu";
    //         $result_get_old_pic = $koneksi->query($query_get_old_pic);
    //         if ($result_get_old_pic->num_rows > 0) {
    //             $row = $result_get_old_pic->fetch_assoc();
    //             $old_pic = $row["pic"];
    //             if ($old_pic && file_exists($folder_simpan . $old_pic)) {
    //                 unlink($folder_simpan . $old_pic);
    //             }
    //         }

    //         // Simpan nama file gambar baru ke dalam variabel
    //         $gambar = $gambarbaru;
    //     } else {
    //         echo "Error uploading image.";
    //     }
    // } else {
    //     // Jika tidak ada gambar baru diunggah, gunakan gambar lama
    //     $query_get_old_pic = "SELECT pic FROM tbl_menu WHERE id = $id_menu";
    //     $result_get_old_pic = $koneksi->query($query_get_old_pic);
    //     if ($result_get_old_pic->num_rows > 0) {
    //         $row = $result_get_old_pic->fetch_assoc();
    //         $gambar = $row["pic"];
    //     }
    // }

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
