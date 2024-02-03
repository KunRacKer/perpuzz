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
        <div class="col-sm-12 col-md-9">
            <div class="container shadow-box">
            
            <div class="container">
  <div class="row g-3 align-items-center">
    <div class="col-auto">
      <label for="ID" class="col-form-label">ID</label>
    </div>
    <div class="col-auto">
      <input id="ID" class="form-control">
    </div>
  </div>

  <div class="row g-3 align-items-center">
    <div class="col-auto">
      <label for="nama" class="col-form-label">Nama</label>
    </div>
    <div class="col-auto">
      <input id="nama" class="form-control">
    </div>
  </div>

  <div class="row g-3 align-items-center">
    <div class="col-auto">
      <label for="email" class="col-form-label">Email</label>
    </div>
    <div class="col-auto">
      <input type="email" id="email" class="form-control">
    </div>
  </div>

  <div class="row g-3 align-items-center">
    <div class="col-auto">
      <label for="notelp" class="col-form-label">No Telepon</label>
    </div>
    <div class="col-auto">
      <input id="notelp" class="form-control">
    </div>
  </div>

  <div class="row g-3 align-items-center">
    <div class="col-auto">
      <label for="alamat" class="col-form-label">Alamat</label>
    </div>
    <div class="col-auto">
      <input id="alamat" class="form-control">
    </div>
  </div>
</div>
                <div style="display: flex; justify-content: center;">
                <a class="btn btn-primary " href="#" role="button" >Konfirmasi</a>
                    </div>
                <div style="display: flex; justify-content: center;" id="btn2">
                    <a class="btn btn-primary " href="#" role="button">Kembali</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
  </body>
</html>