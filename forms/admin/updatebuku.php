<?php
include '../koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ISBN_ISSN = $_POST['ISBN_ISSN'];
    $Judul = $_POST['Judul'];
    $Pengarang = $_POST['Pengarang'];
    $Tipe_media = $_POST['Tipe_media'];
    $Penerbit = $_POST['Penerbit'];
    $Jenis = $_POST['Jenis'];
    $Edisi = $_POST['Edisi'];
    $Tahun_terbit = $_POST['Tahun_terbit'];
    $Subjek = $_POST['Subjek'];
    $Gambar = $_POST['Gambar']; 
    
// Upload gambar
$targetDir = "../../assets/img/sampul/"; // Directory where you want to store the uploaded images
$targetFile = $targetDir . basename($_FILES["Gambar"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["Simpan"])) {
    $check = getimagesize($_FILES["Gambar"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["Gambar"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["Gambar"]["tmp_name"], $targetFile)) {
        
        // Remove "img/" from the targetFile path before storing in the database
        $targetFileWithoutDir = basename($_FILES["Gambar"]["name"]);

        // Query UPDATE data
        if (isset($_POST['Gambar'])) {
            $sql = "UPDATE petugas SET ISBN_ISSN = '$ISBN_ISSN', Judul = '$Judul', Pengarang = '$Pengarang', Tipe_media = '$Tipe_media', Penerbit = '$Penerbit', Jenis = '$Jenis', Edisi = '$Edisi', Tahun_terbit = '$Tahun_terbit', Subjek = '$Subjek', Gambar = '$targetFileWithoutDir' WHERE ISBN_ISSN = $ISBN_ISSN";
        } else {
            $sql = "UPDATE petugas SET ISBN_ISSN = '$ISBN_ISSN', Judul = '$Judul', Pengarang = '$Pengarang', Tipe_media = '$Tipe_media', Penerbit = '$Penerbit', Jenis = '$Jenis', Edisi = '$Edisi', Tahun_terbit = '$Tahun_terbit', Subjek = '$Subjek' WHERE ISBN_ISSN = $ISBN_ISSN";
        }

        if (mysqli_query($koneksi, $sql)) {
            echo "<script>alert('Buku berhasil ditambah!');</script>";
            header("Location: ../../view/admin/buku.php");
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($koneksi);
        }
    } else {
        echo "Maaf, Terjadi kesalahan saat upload foto.";
    }
}
}

mysqli_close($koneksi);
?>
