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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-koleksi">
    <div class="container d-flex justify-content-between align-items-center">
      <div id="logo">
        <a href="index.php"><img src="../assets/img/logo.png" alt="" /></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="../index.php">Home</a></li>
          <li><a class="nav-link active" href="koleksi.php">Collection</a></li>
          <li><a class="nav-link" href="katalog.php">Catalog</a></li>
          <li><a class="nav-link" href="profile.php">Profile</a></li>
          <li class="nav-item dropdown">
            <button class="btn btn-lg" data-bs-toggle="dropdown" aria-expanded="false">
              <i class='bx bx-menu' style='color:#ffffff;'></i>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="forms/logout.php"><i class='bx bx-log-in'> LogIn</i></a></li>
              <li><a class="dropdown-item" href="forms/logout.php"><i class='bx bx-log-out'> LogOut</i></a></li>
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
    <div class="koleksi-container pt-5" data-aos="zoom-in" data-aos-delay="100">
      <center>
        <h1>Detail Buku</h1>
      </center>
    </div>

<?php
include "../forms/koneksi.php";
$id = $_GET['ISBN_ISSN'];
$stmt = $koneksi->prepare("SELECT * FROM buku WHERE ISBN_ISSN = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
while($d = $result->fetch_object()) {
?>
        <div class="container-xxl position-absolute text-center pt-3" data-aos="fade-up" data-aos-delay="100">
          <div class="position-relative">
            <div class="row text-center">
              <div class="col-md-6 col-sm-12"><img src="../assets/img/sampul/<?= $d->Gambar; ?>" class="img-fluid mx-auto" style="width: 360px;" alt="..."></div>
              <div class="col-md-6 col-sm-12">
                <table class="table table-condensed table-striped table-hover" width="100%">
                  <tbody>
                    <tr>
                      <td class="text-right" style="width:200px;vertical-align:top;">Pengarang :</td>
                      <td><?= $d->Pengarang; ?></td>
                    </tr>
                    <tr>
                      <td class="text-right" style="vertical-align:top;">Penerbit :</td>
                      <td><?= $d->Penerbit; ?></td>
                    </tr>
                    <tr>
                      <td class="text-right" style="vertical-align:top;">Jenis :</td>
                      <td><?= $d->Jenis; ?></td>
                    </tr>
                    <tr>
                      <td class="text-right" style="vertical-align:top;">Tipe Media :</td>
                      <td><?= $d->Tipe_media; ?></td>
                    </tr>
                    <tr>
                      <td class="text-right" style="vertical-align:top;">Tahun Terbit :</td>
                      <td><?= $d->Tahun_terbit; ?></td>
                    </tr>
                    <tr>
                      <td class="text-right" style="vertical-align:top;">Edisi :</td>
                      <td><?= $d->Edisi; ?></td>
                    </tr>
                    <tr>
                      <td class="text-right" style="vertical-align:top;">Subjek :</td>
                      <td><span><?= $d->Subjek; ?></span></td>
                    </tr>
                    <tr>
                      <td class="text-right" style="vertical-align:top;">ISBN/ISSN :</td>
                      <td><span><?= $d->ISBN_ISSN; ?></span></td>
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
                    <a href="tambahbuku.php"><button type="button" class="btn btn-primary mx-3 mb-3 col-md-5">Pinjam</button></a>
              </div>
              
            </div>
          </div>
        </div>

        

  </section>
  <!-- End Section -->

  <!-- end content -->
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>

</html>