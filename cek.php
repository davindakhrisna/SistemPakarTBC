<?php

if (!isset($_POST['diagnosa'])) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SISTEM PAKAR TB PARU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">SISTEM PAKAR TB PARU</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	    </div>
	</nav>

    <section class="hero-wrap js-fullheight" style="background-image: url('images/5063406.jpg');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-10 pt-5 ftco-animate">
          	<div class="mt-5">
            <?php

                if (isset($_POST['diagnosa'])) {
                    $batuk = $_POST['batuk'];
                    $demam = $_POST['demam'];
                    $keringat = $_POST['keringat'];
                    $dada_nyeri = $_POST['dada_nyeri'];
                    $nafas = $_POST['nafas'];
                    $berat_badan = $_POST['berat_badan'];
                    $nafsu_makan = $_POST['nafsu_makan'];
                    $nama = $_POST['nama'];
                    $jenis_kelamin = $_POST['jenis_kelamin'];
                    $umur = $_POST['umur'];
                    $alamat = $_POST['alamat'];

                    require_once 'fuzzifikasi.php';

                    require_once 'inferensi.php';

                if ($output < $mean) {
                    echo "<div class='alert alert-info alert-dismissible fade show col-md-8' role='alert'> Kondisi tubuh anda terlihat stabil, anda tidak terindikasi TB Paru <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></div>
                    </button>";
                    $status = "Tidak Terindikasi" ;
                } elseif ($output >= $mean) {
                    echo "<div class='alert alert-danger alert-dismissible fade show col-md-8' role='alert'> Kondisi tubuh anda mulai tidak stabil, anda terindikasi TB Paru. Silahkan lakukan pemeriksaan lebih lanjut ke puskesmas atau rumah sakit terdekat <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></div>
                    </button>";
                    $status = "Terindikasi";
                }
                }
            ?>
	            <div class="container bg-light rounded pt-4 pb-2 col-md-12 float-left pl-4">
                    <form action="cetak.php" method="post" class="col-md-12">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-dark">Nama</label>
                            <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" name="nama" value=": <?= $nama; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-dark">Jenis Kelamin</label>
                            <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" name="jenis_kelamin" value=": <?= $jenis_kelamin; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-dark">Umur</label>
                            <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" name="umur" value=": <?= $umur; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-dark">Alamat</label>
                            <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" name="alamat" value=": <?= $alamat; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-dark">Batuk Berdarah</label>
                            <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" name="batuk" value=": <?= $batuk; ?> Hari">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-dark">Demam Tinggi</label>
                            <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" name="demam" value=": <?= $demam; ?> Hari">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-dark">Dada Terasa Nyeri</label>
                            <div class="col-sm-8">
                            <input type="text" readonly class="form-control-plaintext" name="dada_nyeri" value=": Tingkatan ke <?= $dada_nyeri; ?>">
                            </div>
                        </div> 
                    </div>   
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Keringat Dingin</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" name="keringat" value=": <?= $keringat; ?> Hari">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Nafas Sesak</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" name="nafas" value=": Tingkatan ke <?= $nafas; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Nafsu Makan Berkurang</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" name="nafsu_makan" value=": <?= $nafsu_makan; ?> Hari">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Batuk Badan Turun</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" name="berat_badan" value=": <?= $berat_badan; ?> Kg">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Status</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" name="status" value=": <?= $status; ?> TB Paru ">
                        </div>
                    </div>
                    <div class="form-group">
					<button name="cetak" class="btn btn-primary py-3 px-5">Cetak Kartu</button>
				</div> 
                    </div>
                    </div>
                    </form>
                </div>   

            </div>
          </div>
        </div>
      </div>
    </section>
  
  <footer class="footer">
  </footer>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>