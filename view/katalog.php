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
    <header id="header" class="fixed-top d-flex align-items-center header-koleksi">
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
              <form class="card card-sm" action="" method="GET">
                <div class="card-body row no-gutters align-items-center">
                  <div class="col-auto">
                    <i class="fas fa-search h4 text-body"></i>
                  </div>
                  <!--end of col-->
                  <div class="col">
                    <input class="form-control form-control-lg form-control-borderless" name="Judul" type="search" placeholder="Search Books Title"/>
                  </div>
                  <!--end of col-->
                  <div class="col-auto">
                      <button class="btn btn-lg btn-success" type="submit" name="search" value="search">Search</button>
                  </div>
                  <!--end of col-->
                </div>
              </form>



              <!-- Advance search-->
              <div class="container pb-5">
                <br>
                <h5><center>Advanced Search</center></h5>
                <form class="row g-3" action="" method="GET">
                  <div class="col-md-3">
                    <label for="input" class="form-label">Tahun Terbit(Dari)</label>
                    <input type="number" name="Tahun1" class="form-control" min="1800" max="2024" step="1" value="2014">
                  </div>
                  <div class="col-md-3">
                    <label for="input" class="form-label">Tahun Terbit(Sampai)</label>
                    <input type="number" name="Tahun2" class="form-control" min="1800" max="2024" step="1" value="2024">
                  </div>
                  <div class="col-md-6">
                    <label for="input" class="form-label">ISSN/ISBN</label>
                    <input type="text" name="ISBN_ISSN" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="input" class="form-label">Pengarang</label>
                    <input type="text" name="Pengarang" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="input" class="form-label">Penerbit</label>
                    <input type="text" name="Penerbit" class="form-control">
                  </div>
                  <div class="col-md-12">
                      <button class="btn btn-lg btn-success" type="submit" name="search" value="search">Search</button>
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
      

      <?php
include '../forms/koneksi.php';

$Judul = isset($_GET['Judul']) ? $_GET['Judul'] : '';
$Tahun1 = isset($_GET['Tahun1']) ? $_GET['Tahun1'] : '';
$Tahun2 = isset($_GET['Tahun2']) ? $_GET['Tahun2'] : '';
$ISBN_ISSN = isset($_GET['ISBN_ISSN']) ? $_GET['ISBN_ISSN'] : '';
$Pengarang = isset($_GET['Pengarang']) ? $_GET['Pengarang'] : '';
$Penerbit = isset($_GET['Penerbit']) ? $_GET['Penerbit'] : '';

$sql = "SELECT * FROM buku WHERE Judul LIKE '%$Judul%'";

if (!empty($Tahun1) && !empty($Tahun2)) {
    $sql .= " AND (Tahun_terbit >= $Tahun1 AND Tahun_terbit <= $Tahun2)";
}

$sql .= " AND (ISBN_ISSN LIKE '%$ISBN_ISSN%' OR Pengarang LIKE '%$Pengarang%' OR Penerbit LIKE '%$Penerbit%')";

$data = mysqli_query($koneksi, $sql);

if (!$data) {
    printf("Error: %s\n", mysqli_error($koneksi));
    exit();
}

$result = $data
?>

<!-- Koleksi+widget -->
<section id="koleksi">

  <div class="container">
  
  <div class="row">
      <div class="col-md-12">
        <h1>Koleksi Terbaru</h1>
        <hr>
          <div class="scrollable-div row-gap-2" style="max-height:600px;overflow-y:scroll;">
            <div class="row">
              <?php while ($d = mysqli_fetch_object($result)) { ?>
              <div class="col-sm-12 col-md-6">
                <div class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto" style="font-size: 12px;">
                    <a href="detailbuku.php?ISBN_ISSN=<?= $d->ISBN_ISSN; ?>" class="list-group-item list-group-item-action" style="color: blue;"><?= $d->Judul; ?></a>
                    <?= $d->Pengarang; ?>, Penerbit: <?= $d->Penerbit; ?>, Edisi: <?= $d->Edisi; ?>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      <!-- end -->
    </div>
  </section>
  
  </body>
</html>
