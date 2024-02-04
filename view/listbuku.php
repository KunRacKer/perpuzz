<?php
  session_start(); // Start a session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Perpuzz</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="../assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

  </head>

  <!-- style -->
  <style>
    .scrollable-div {
    min-height: 400px;
    overflow-y: scroll;}

    .shadow-box {
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 20px;
      }
      
      #btn{
        margin-top: 3rem;
      }

      .btn{
        size: 130%;
      }
  </style>
  <!-- end -->

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-profile">
      <div class="container d-flex justify-content-between align-items-center">
        <div id="logo">
          <a href="index.php"><img src="../assets/img/logo.png" alt="" /></a>
        </div>
      
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link" href="../index.php">Home</a></li>
            <li><a class="nav-link " href="koleksi.php">Collection</a></li>
            <li><a class="nav-link" href="katalog.php">Catalog</a></li>
            <li><a class="nav-link active" href="profile.php">Profile</a></li>
            <li class="nav-item dropdown">
              <button class="btn btn-lg" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bx-menu' style='color:#ffffff;'></i>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../forms/logout.php"><i class='bx bx-log-out'> LogOut</i></a></li>
              </ul>
            </li>
            </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Section ======= -->
    <section id="koleksi">
      <div class="profile-container pt-5" >
        <center><h1>List Buku</h1></center>
      </div>

<?php
// fetching data
include '../forms/koneksi.php';
$id = $_SESSION['ID_anggota'];
$query = "SELECT mendata.ISBN_ISSN, DATE_FORMAT(mendata.Tgl_pinjam, '%d %M %Y') AS Tgl_pinjam, DATE_FORMAT(mendata.Tgl_kembali, '%d %M %Y') AS Tgl_kembali, mendata.ID_anggota, mendata.No_pinjam, buku.Judul, buku.Pengarang, buku.Penerbit, buku.Edisi, buku.Gambar, petugas.Nama_petugas FROM buku JOIN mendata ON buku.ISBN_ISSN = mendata.ISBN_ISSN JOIN petugas ON petugas.ID_petugas = mendata.ID_petugas WHERE mendata.ID_anggota = $id ORDER BY buku.Judul ASC";
$result = mysqli_query($koneksi, $query);
?>
    <!-- End Section -->
    <div class="container mt-5">
        <div class="row">
        <?php while ($d = mysqli_fetch_object($result)) { ?>
          <div class="mb-4"><hr></div>
            <div class="col-md-4">
                <img src="../assets/img/sampul/<?= $d->Gambar; ?>" style="width: 170px;" class="shadow-box" alt="Image">
            </div>
            <div class="col-md-4">
                <p class="float-right"><?= $d->Judul; ?></p>
                <p class="float-right"><?= $d->Pengarang; ?>, <br> Penerbit: <?= $d->Penerbit; ?>, Edisi: <?= $d->Edisi; ?></p>
                <p class="float-right">Pinjam: <?= $d->Tgl_pinjam; ?> <br>Kembalikan: <?= $d->Tgl_kembali; ?></p>
            </div>
            <div class="col-md-4">
                <div style="display: flex; justify-content:end;">
                    <a class="btn btn-primary" href="../forms/bukukembali.php?No_pinjam=<?= $d->No_pinjam; ?>" role="button">Kembalikan</a>
                </div>
                <div style="display: flex; justify-content:end;">
                    <a class="btn btn-primary" href="../forms/perpanjang.php?ISBN_ISSN=<?= $d->ISBN_ISSN; ?>&No_pinjam=<?= $d->No_pinjam; ?>" role="button" id="btn">Perpanjang</a>
                </div>
                <div style="display: flex; justify-content:end; padding-top: 60px;">
                    <p class="float-center">PIC: <?= $d->Nama_petugas; ?></p>
                </div>
            </div>
          <?php } ?>
        </div>
    </div>

    <div style="display: flex; justify-content:center;">
        <a class="btn btn-primary" href="profile.php" role="button" id="btn">Kembali</a>
    </div>
    </section>
  </body>
</html>