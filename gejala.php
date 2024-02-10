<?php
session_start();

if ($_SESSION['status'] != 'login') {
  header('Location: login_admin.php?pesan=belum_login');
}

include 'koneksi.php';

$username = $_SESSION['username'];

$data = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' ");
$pecah = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kelompok 3 - Gejala TB Paru</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="gejala.php">
  <div class="sidebar-brand-icon">
  <img src="assets/img/kelompok3.png" width="55px">
  </div>
  <div class="sidebar-brand-text mx-3">KELOMPOK TB PARU</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="gejala.php">
    <i class="fas fa-fw fa-book"></i>
    <span>Gejala</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="logout.php">
    <i class="fas fa-fw fa-sign-out-alt"></i>
    <span>Logout</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

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

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <h3>Data Gejala</h3>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= ucfirst($pecah['nama']); ?></span>
                <img class="img-profile rounded-circle" src="assets/img/user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <?php
            if (isset($_GET['pesan'])) {
              if($_GET['pesan'] === 'edit') {
                echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                Data operator berhasil <strong>diubah</strong> 
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
                </div>";
            }
          }
          ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive text-center">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Gejala</th>
                        <th scope="col">Batas Bawah</th>
                        <th scope="col">Batas Atas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                    <?php
                        $number = 1;
                        $result = mysqli_query($koneksi, "SELECT * FROM gejala");
                        foreach ($result as $gejala) {
                    ?>
                  <tbody>
                    <tr>
                        <td><?= $number ?></td>
                        <td><?= ucfirst($gejala["nama_gejala"]) ?></td>
                        <td><?= $gejala["bt_bawah"] ?></td>
                        <td><?= $gejala["bt_atas"] ?></td>
                        <td>
                            <a href="edit_data_gejala.php?id=<?= $gejala['kode_gejala'] ?>" class="fas fa fa-edit text-success"> Edit Data Gejala</a>
                        </td>
                    </tr>
                  </tbody>
                  <?php $number++; } ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/datatables-demo.js"></script>

</body>

</html>