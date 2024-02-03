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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />

    <!-- style -->
    <style>
    .scrollable-div {
    min-height: 600px;
    overflow-y: scroll;

    }
    .tg-signupbox{
			background: url(https://lib.unikom.ac.id/an-theme/education/assets/images/bg-opac2.jpg) top left fixed;
			background-size: cover;
			min-height:600px;
			position: relative;

		}
		.tg-widgetcontent ul li:before {
			
			 background: #fff; 
			
		}
			
			
			.tg-inputwithicon2 .form-control, .tg-inputwithicon2 .tg-select select {
				padding-left: 45px;
				font-size: large;
				height: 60px;
				
			}
	.tg-widgetcontent ul li a {
		color: #085ca3;

	}

	#color-overlay {
	   position: absolute;
	   top: 0;
	   left: 0;
	   width: 100%;
	   height: 100%;
	   background-color: #02192c;
	   opacity: 0.6;
	}

	.tg-coursestabs .tg-themetabcontent {

		border-radius: 0px 0px 10px 10px;
		box-shadow: 6px 4px 8px 0px #f3f3f37a;
	}
	.list-group-item {
		border: 0px solid #ddd;
		padding: 10px 15px;
	}


	.tg-widgetcontent ul li {
		padding: 10px 10px 10px 9px;
		list-style:outside none none;
	}

	@media (max-width: 768px) {
		.container2 {
			width: 100%;
			margin-top:-10px;
			border-radius:0px !important;
			
		}
		
	}
	
	.tg-signupbox {
				padding:0px;
		}
		
input:placeholder-shown {
   font-style: italic;
}




    #search{
      padding: 6rem;
    }

    .shadow-box {
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
          padding: 20px;
      }

      
</style>
<!-- end -->

  </head>
  <body>
    <!-- ======= Header ======= -->
    <header
      id="header"
      class="fixed-top d-flex align-items-center header-koleksi"
    >
      <div class="container d-flex justify-content-between align-items-center">
        <div id="logo">
          <a href="../index.php"><img src="../assets/img/logo.png" alt="" /></a>
        </div>
      
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link" href="../index.php">Home</a></li>
            <li><a class="nav-link" href="koleksi.php">Collection</a></li>
            <li><a class="nav-link active" href="katalog.php">Catalog</a></li>
            <li><a class="nav-link" href="profile.php">Profile</a></li>
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

  


      <!-- ======= About Section ======= -->
      <section id="search">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous"/>
        <div class="container shadow-box">
          <br/>
          <div class="row justify-content-center">
            <h2><center>Search Book</center></h2>
          </div>
          <br>
          <br>
          
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
              <form class="card card-sm">
                <div class="card-body row no-gutters align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-search h4 text-body"></i>
                  </div>
                  <!--end of col-->
                  <div class="col">
                    <input
                      class="form-control form-control-lg form-control-borderless"
                      type="search"
                      placeholder="Search Books or keywords"
                    />
                  </div>
                  <!--end of col-->
                  <div class="col-auto">
                    <a href="#">
                      <button class="btn btn-lg btn-success" type="submit">
                        Search
                      </button>
                    </a>
                  </div>
                  <!--end of col-->
                </div>
                

              </form>
              <!-- Advance search-->
              <div class="container pb-5">
                <br>
                <h5><center>Advanced Search</center></h5>
                <form class="row g-3">
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Judul</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">ISSN/ISBN</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Pengarang</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Penerbit</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
                </form>
                <!-- end advance -->
              </div>
            </div>
            <!--end of col-->
          </div>
        </div>
        </section>
      <!-- End About Section -->
      


<!-- Koleksi+widget -->
<section id="koleksi">

  <div class="container">
  
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <h1>Koleksi Terbaru</h1>
    <hr>

    <div class="scrollable-div row-gap-2" style="max-height:600px;overflow-y:scroll;">
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto" style="font-size: 12px;">
      <a href="#" class="list-group-item list-group-item-action" style="color: blue;">NIEBELS Methods, Standards, And Work Design</a>
        Andris Freivalds, Benjamin W. Niebel
      </div>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto" style="font-size: 12px;">
      <a href="#" class="list-group-item list-group-item-action" style="color: blue;">STRATEGI Visual</a>
      Andry Masri
      </div>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto" style="font-size: 12px;">
      <a href="#" class="list-group-item list-group-item-action" style="color: blue;">FIQH Muamalat: Sistem Transaksi Dalam Fiqh Islam</a>
      Abdul Aziz Muhammad Azzam
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto" style="font-size: 12px;">
      <a href="#" class="list-group-item list-group-item-action" style="color: blue;">ANALISIS Data Dengan Statistika Nonparametrik</a>
      Nar Herrhyanto, Tuti Gantini
      </div>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto" style="font-size: 12px;">
      <a href="#" class="list-group-item list-group-item-action" style="color: blue;">Nar Herrhyanto, Tuti Gantini</a>
      Tere Liye
      </div>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto" style="font-size: 12px;">
      <a href="#" class="list-group-item list-group-item-action" style="color: blue;">GEOGRAFI Kota dan Desa</a>
      N. Daldjoeni
      </div>
    </li>
    
    </div>
  </div>
  


  <!-- end -->

  <!-- koleksi 2-->
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 " style="font-size: medium;">
      <div class="tg-widget tg-widgetdownload" style="padding:20px;background-color:#fff;">
        <div class="container" style="background-color: #F4F5F1 ;">
          <h3>Koleksi</h3>
			  </div>
        <div class="" style="padding:0px 10px;">
        <ul>
	        <li><a href="#">Buku</a><span class="pull-right"> # judul, # eksemplar.</span></li>
          <li><a href="#">Audio Visual</a><span class="pull-right"># judul, # eksemplar.</span></li>
          <li><a href="#">Berkala / Serial</a><span class="pull-right"># judul, # eksemplar.</span></li>
        </ul>
        </div>
      </div>

      <div class="tg-widget tg-widgetdownload" style="padding:20px;background-color:#fff;">
        <div class="tg-widgettitle" style="background-color: #F4F5F1 ;">
				  <h3>Grup Jenis Media</h3>
			  </div>
        <div class="" style="padding:0px 10px;">
      <ul>
	      <li><a href="#">Art Original</a> <span class="pull-right"># judul , # eksemplar.</span></li>
        <li><a href="#">CD-ROM</a> <span class="pull-right"># judul , # eksemplar.</span></li>
        <li><a href="#">Diskete</a> <span class="pull-right"># judul , # eksemplar.</span></li>
        <li><a href="#">Electronic Resource</a> <span class="pull-right"># judul , # eksemplar.</span></li>
        <li><a href="#">KASSETE</a> <span class="pull-right"># judul , # eksemplar.</span></li>
        <li><a href="#">Text book</a> <span class="pull-right"># judul , # eksemplar.</span></li>
      </ul>
        </div>
      </div>

      <div class="tg-widget tg-widgetdownload" style="padding:20px;background-color:#fff;">
        <div class="tg-widgettitle" style="background-color: #F4F5F1 ;">
				  <h3>Grup Jenis Serial</h3>
			  </div>
        <div class="" style="padding:0px 10px;">
        <ul>
	        <li><a href="#">Buletin</a> <span class="pull-right"># judul , # eksemplar.</span></li>
          <li><a href="#">Jurnal</a> <span class="pull-right"># judul , # eksemplar.</span></li>
          <li><a href="#">Kliping</a> <span class="pull-right"># judul , # eksemplar.</span></li>
          <li><a href="#">Koran</a> <span class="pull-right"># judul , # eksemplar.</span></li>
          <li><a href="#">Laporan Kegiatan</a> <span class="pull-right"># judul , # eksemplar.</span></li>
          <li><a href="#">Majalah</a> <span class="pull-right"># judul , # eksemplar.</span></li>
          <li><a href="#">Prosiding</a> <span class="pull-right"># judul , # eksemplar.</span></li>
          <li><a href="#">Tabloid</a> <span class="pull-right"># judul , # eksemplar.</span></li>
        </ul>
        </div>
      </div>
    </div>
    </div>
    </div>
    </section>
  
  </body>
</html>
