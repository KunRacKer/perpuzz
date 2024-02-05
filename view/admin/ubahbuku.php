<?php
  session_start(); // Start a session
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta value="" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta value="" name="description" content="">
    <meta value="" name="author" content="">

    <title>Dashboard Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/admin/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Perpuzz Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Mendata
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="mendata.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Mendata</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Buku
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="buku.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Buku</span></a>
            </li>
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>User</span></a>
            </li>
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Petugas
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="petugas.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Petugas</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../forms/logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
<?php
// fetching data
include '../../forms/koneksi.php';
$id = $_GET['ISBN_ISSN'];
$stmt = $koneksi->prepare("SELECT * FROM buku WHERE ISBN_ISSN = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
while($d = $result->fetch_object()) {
?>
                <h1 class="m-5 text-dark"> Ubah Buku</h1>
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="../../forms/admin/updatebuku.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ISBN_ISSN</label>
                                <input type="text"  value="<?= $d->ISBN_ISSN; ?>" name="ISBN_ISSN" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nomor ISBN_ISSN">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul</label>
                                <input type="text" value="<?= $d->Judul; ?>" name="Judul" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pengarang</label>
                                <input type="text" value="<?= $d->Pengarang; ?>" name="Pengarang" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Pengarang">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectRounded0">Tipe_Media</label>
                                <select class="custom-select rounded-0" name="Tipe_media" id="exampleSelectRounded0">
                                    <option value="<?= $d->Tipe_media; ?>" selected disable><?= $d->Tipe_media; ?></option>
                                    <option value="Text Book">Text Book</option>
                                    <option value="E Book">E Book</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Penerbit</label>
                                <input type="text" value="<?= $d->Penerbit; ?>" name="Penerbit" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Penerbit">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectRounded0">Jenis</label>
                                <select class="custom-select rounded-0" name="Jenis" id="exampleSelectRounded0">
                                    <option value="<?= $d->Jenis; ?>" selected disable><?= $d->Jenis; ?></option>
                                    <option value="Buku">Buku</option>
                                    <option Value="Novel">Novel</option>
                                    <option Value="Majalah">Majalah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Edisi</label>
                                <input type="text" value="<?= $d->Edisi; ?>" name="Edisi" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Edisi">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tahun Terbit</label>
                                <input type="text" value="<?= $d->Tahun_terbit; ?>" name="Tahun_terbit" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Tahun Terbit">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Subjek</label>
                                <input type="text" value="<?= $d->Subjek; ?>" name="Subjek" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Subjek">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Cover Buku</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="Gambar" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="Simpan" value="Submit">Simpan</button>
                            <button type="submit" class="btn btn-default float-right"> <a href="buku.php">Kembali</a> </button>
                        </div>

                    </form>
                    <?php } ?>
                </div>
            </div>
            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->

</body>

</html>