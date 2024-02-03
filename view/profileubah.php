<?php
  session_start(); // Start a session

  if (!isset($_SESSION['Email'])) {
      header("Location: login.php");
      exit(); // Stop further execution of the page
  }
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

    #btn2{
        padding-top: 1rem;
    }
  </style>
  <!-- end -->

  <body>
    <!-- ======= Header ======= -->
    <header
      id="header"
      class="fixed-top d-flex align-items-center header-profile"
    >
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
      <div class="profile-container pt-5"  data-aos-delay="100">
        <center><h1>Profile</h1></center>
      </div>

    <!-- End Section -->

<!-- foto profile-->

    <div class="container shadow-box">
        <div class="row">
            <div class="col-sm-12 col-md-3 text-center" id="icon" style="justify-content: center;">
                <img src="../assets/img/icon.jpg" alt="icon" width="150" class="rounded-circle border border-primary-subtle">
            </div>
            
        
<!-- end -->
<?php
// fetching data
include '../forms/koneksi.php';
$id = $_GET['ID_anggota'];
$stmt = $koneksi->prepare("SELECT * FROM anggota WHERE ID_anggota = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
while($d = $result->fetch_object()) {
?>
        <div class="col-sm-12 col-md-9">
            <div class="container shadow-box">
                <div class="mb-3 row">
                    <label for="idanggota" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="idanggota" value="<?= $d->ID_anggota; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">NAMA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="staticEmail" value="<?= $d->Nama_anggota; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">EMAIL</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="staticEmail" value="<?= $d->Email; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">NO TELEPON</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="staticEmail" value="<?= $d->No_telp; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">ALAMAT</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="staticEmail" value="<?= $d->Alamat; ?>">
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <a class="btn btn-primary " href="#" role="button">Konfirmasi</a>
                </div>
                <div style="display: flex; justify-content: center;" id="btn2">
                    <a class="btn btn-primary " href="profile.php" role="button">Kembali</a>
                </div>
            </div>
            <?php } ?>
        </div>

        
      </div>
      </div>
      </div>
    </div>
</section>
  </body>
</html>