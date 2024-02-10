<?php

include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CETAK KARTU</title>
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
  <body>  

        <!-- Begin Page Content -->
        <div class="container mt-4">

            <div class="kopSurat">
                <img src="images/kelompok3.png" width="200px" position="fixed" style="margin-left:55px">
                <h1 style="margin-top:-170px; margin-bottom:140px; margin-left:255px; font-size:50px;" position="fixed">KELOMPOK 3</h1>
                <h3 style="margin-top:-130px; margin-bottom:90px; margin-left:260px; font-size:13px;">Jl. DI Pandjaitan, Purwokerto, Jawa Tengah, Indonesia</h3>
            </div>
            <hr>

            <?php

                if (isset($_POST['cetak'])) {
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
                    $status = $_POST['status'];
                }
            ?>

            <div class="row">
                <div style="margin-left:25%" class="mb-4 mt-4">
                    <h3 class="text-center font-weight-bold">Kartu Tanda Pengecekan Gejala <br> Penyakit TBC</h3>
                    <hr>
                </div>
                <form class="col-md-12 center ml-4">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Nama</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext"  value="<?= $nama; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Jenis Kelamin</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext"  value="<?= $jenis_kelamin; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Umur</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext"  value="<?= $umur; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Alamat</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext"  value="<?= $alamat; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Batuk Berdarah</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext"  value="<?= $batuk; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Demam Tinggi</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext"  value="<?= $demam; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Dada Terasa Nyeri</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext"  value="<?= $dada_nyeri; ?>">
                        </div>
                    </div>
                </div>   
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Keringat Dingin</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext"  value="<?= $keringat; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Nafas Sesak</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext"  value="<?= $nafas; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Nafsu Makan Berkurang</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext"  value="<?= $nafsu_makan; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Batuk Badan Turun</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext"  value="<?= $berat_badan; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label text-dark">Status</label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext"  value="<?= $status; ?>">
                        </div>
                    </div>
                    <?php
                    function hari_ini(){
                        $hari = date ("D");                 
                        switch($hari){
                            case 'Sun':
                                $hari_ini = "Minggu";
                            break;                   
                            case 'Mon':			
                                $hari_ini = "Senin";
                            break;                    
                            case 'Tue':
                                $hari_ini = "Selasa";
                            break;                    
                            case 'Wed':
                                $hari_ini = "Rabu";
                            break;                   
                            case 'Thu':
                                $hari_ini = "Kamis";
                            break;
                    
                            case 'Fri':
                                $hari_ini = "Jumat";
                            break;                    
                            case 'Sat':
                                $hari_ini = "Sabtu";
                            break;                           
                            default:
                                $hari_ini = "Tidak di ketahui";		
                            break;
                        }                    
                        return $hari_ini;                   
                    }

                    ?>
                    <div class="form-group row">
                        <label class="col-sm-10 col-form-label text-dark"><b> Hari <?= hari_ini() ?>, <?= date('d-m-Y'); ?></b></label>
                    </div>
                </div>
                </form>
            </div>
        </div>
  
  
  
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

<script>
    window.print();
</script>