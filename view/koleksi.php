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

  <body>
    <!-- ======= Header ======= -->
    <header
      id="header"
      class="fixed-top d-flex align-items-center header-koleksi"
    >
      <div class="container d-flex justify-content-between align-items-center">
        <div id="logo">
          <a href="index.php"><img src="../assets/img/logo.png" alt="" /></a>
        </div>
      
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link" href="../index.php">Home</a></li>
            <li><a class="nav-link active" href="koleksi.php">Collection</a></li>
            <li><a class="nav-link" href="#about">Catalog</a></li>
            <li><a class="nav-link" href="#services">Favorite</a></li>
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
        <center><h1>Koleksi Buku</h1></center>
      </div>
    </section>
    <!-- End Section -->

<?php
// fetching data
include '../forms/koneksi.php';
$query = "SELECT Judul, Gambar FROM buku ORDER BY Judul ASC";
$result = mysqli_query($koneksi, $query);
?>
        <!-- content -->
        <div class="container px-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <?php while ($d = mysqli_fetch_object($result)) { ?>
                <div class="col-md-3 col-sm-6">
                    <div class="card my-4"><a href="#">
                        <img src="../assets/img/sampul/<?= $d->Gambar; ?>" alt="<?= $d->Judul; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $d->Judul; ?></h5>
                        </div>
                    </a></div>
                </div>
                <?php } ?>
            </div>
        </div>
      </div>
    </div>
    <br>
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
