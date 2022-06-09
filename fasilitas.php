<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Queen Hotel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav navbar-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="assets/index3.html" class="navbar-brand">
        <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Queen Hotel</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="kamar.php" class="nav-link">Kamar</a>
          </li>
          <li class="nav-item">
            <a href="fasilitas.php" class="nav-link">Fasilitas</a>
          </li>
        </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Queen Hotel </h1>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
      <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img class="d-block w-100" src="assets/gambar/hotel1.jpg" alt="First slide" height="450">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="assets/gambar/hotel2.jpg" alt="Second slide" height="450">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="assets/gambar/hotel3.jpg" alt="Third slide" height="450">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

            <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                <div class="card card-outline">
                <div class="card-body">
                <img class="d-block w-100" src="gambar/resepsionis.jpg" height="200">
                </div>
                </div>
                </div>

                <div class="col-md-4">
                <div class="card card-outline">
                <div class="card-body">
                <img class="d-block w-100" src="gambar/restaurant.jpg" height="200">
                </div>
                </div>
                </div>

                <div class="col-md-4">
                <div class="card card-outline">
                <div class="card-body">
                <img class="d-block w-100" src="gambar/olahraga.jpg" height="200">
                </div>
                </div>
                </div>

                <div class="col-md-4">
                <div class="card card-outline">
                <div class="card-body">
                <img class="d-block w-100" src="gambar/hiburan.jpg" height="200">
                </div>
                </div>
                </div>

                <div class="col-md-4">
                <div class="card card-outline">
                <div class="card-body">
                <img class="d-block w-100" src="gambar/kolam.jpg" height="200">
                </div>
                </div>
                </div>

                <div class="col-md-4">
                <div class="card card-outline">
                <div class="card-body">
                <img class="d-block w-100" src="gambar/kamar_mandi.jpg" height="200">
                </div>
                </div>
                </div>
            </div>
            </div>

      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022</strong> Rekayasa Perangkat Lunak | Devi Aprilia 
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>