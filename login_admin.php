<?php 
session_start();

include "koneksi.php";

if( isset( $_POST['login'] )) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' ");

    if (mysqli_num_rows($result) === 1 ) {
        $data = mysqli_fetch_assoc($result);
        if ($password === $data["password"]) {
          if ($_SESSION['username'] = $username) {
            $_SESSION['status'] = 'login';
            header("location: gejala.php");
          }          
        }
      }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>login Admin</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container mt-5">

  <h3 class="text-light row justify-content-center font-weight-bolder">SISTEM PAKAR PENYAKIT TB PARU</h3>

  <div class="row justify-content-center">

    <div class="col-md-5">

    <?php if(isset($_GET['pesan'])) { 
        if($_GET['pesan'] === 'logout') {
    ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            Terimakasih telah menggunakan aplikasi ini
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } elseif($_GET['pesan'] === 'belum_login') { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda <strong>belum login</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } } ?>

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-md">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Halaman Login Admin</h1>
                  <?php if(isset($error)) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      Username dan password <strong>salah</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php } ?>
                </div>
                <form class="user" action="" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="username" id="username"
                      placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" id="password"
                      placeholder="Password">
                  </div>
                  <button class="btn btn-primary btn-user btn-block" name="login">
                    Login
                  </button>
                  <div class="text-center">
                    <a href="index.php">Kembali ke Halaman Utama</a>
                  </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>