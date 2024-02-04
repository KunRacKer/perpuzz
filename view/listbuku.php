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
      <div class="profile-container pt-5" >
        <center><h1>List Buku</h1></center>
      </div>

    <!-- End Section -->
    <div class="container shadow-box mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="../assets/img/sampul/gmbr (1).jpeg" style="width: 120px; height: 170px;" alt="Image">
            </div>
            <div class="col-md-4">
                <p class="float-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum pariatur dignissimos quod sint nam rem quas nemo nesciunt voluptatibus cupiditate.</p>
            </div>
            <div class="col-md-4">
                <div style="display: flex; justify-content:center;">
                    <a class="btn btn-primary" href="#" role="button">Kembalikan</a>
                </div>
                <div style="display: flex; justify-content:center;">
                    <a class="btn btn-primary" href="#" role="button" id="btn">Perpanjang</a>
                </div>
            </div>
            
        </div>
    </div>

    <div class="container shadow-box mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="../assets/img/sampul/gmbr (2).jpg" style="width: 120px; height: 170px;" alt="Image">
            </div>
            <div class="col-md-4">
                <p class="float-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum pariatur dignissimos quod sint nam rem quas nemo nesciunt voluptatibus cupiditate.</p>
            </div>
            <div class="col-md-4">
                <div style="display: flex; justify-content:center;">
                    <a class="btn btn-primary" href="#" role="button">Kembalikan</a>
                </div>
                <div style="display: flex; justify-content:center;">
                    <a class="btn btn-primary" href="#" role="button" id="btn">Perpanjang</a>
                </div>
            </div>
            
        </div>
    </div>

    <div class="container shadow-box mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="../assets/img/sampul/gmbr (3).jpg" style="width: 120px; height: 170px;" alt="Image">
            </div>
            <div class="col-md-4">
                <p class="float-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum pariatur dignissimos quod sint nam rem quas nemo nesciunt voluptatibus cupiditate.</p>
            </div>
            <div class="col-md-4">
                <div style="display: flex; justify-content:center;">
                    <a class="btn btn-primary" href="#" role="button">Kembalikan</a>
                </div>
                <div style="display: flex; justify-content:center;">
                    <a class="btn btn-primary" href="#" role="button" id="btn">Perpanjang</a>
                </div>
            </div>
            
        </div>
    </div>
    </section>
  </body>
</html>