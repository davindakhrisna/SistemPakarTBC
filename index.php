<?php

require_once "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendeteksi  TBC</title>
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
	      <a class="navbar-brand" href="index.php">SISTEM PAKAR TBC</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Tentang</span></a></li>
	          <li class="nav-item"><a href="#department-section" class="nav-link"><span>Gejala</span></a></li>
	          <li class="nav-item"><a href="#doctor-section" class="nav-link"><span>Penyakit TBC</span></a></li>
			  <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Cek Kondisi</span></a></li>
			  <li class="nav-item"><a href="login_admin.php" class="nav-link"><span>Admin</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	  <section class="hero-wrap js-fullheight" style="background-image: url('images/parubg.jpg');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-10 pt-5 ftco-animate">
          	<div class="mt-5">
	            <h1 class="mb-4">Selamat Datang <br>di Sistem Pakar TBC</h1>
	            <p><a href="#contact-section" class="btn btn-primary py-3 px-4">Cek Kondisi Anda</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row ">
    			<div class="col-md-12 col-lg-12 pl-lg-12 py-md-12">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
			            <h2 class="mb-4">Sistem Pakar <span>TBC</span></h2>
			            <p>Sistem Pakar TB Paru adalah sebuah sistem pakar yang membantu masyarakat untuk mendeteksi gejala awal penyakit Tuberculosis Paru</p>
			          </div>
			        </div>
				</div>
	        </div>
        </div>
    	</div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    	<div class="container-fluid px-0">
		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Gejala Penyakit TBC</h2>
			<p>Beberapa gejala penyakit TB Paru yang sering dirasakan</p>
		  </div>
        </div>
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="img img-dept align-self-stretch" style="background-image: url(images/5063406.jpg);"></div>
    			</div>

    			<div class="col-md-8">
    				<div class="row no-gutters">
    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span> 1 </span>
    								</div>
									<h3><a>Batuk lebih dari 3 minggu</a></h3>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span> 4 </span>
    								</div>
    								<h3><a>Batuk (dahak) berdarah</a></h3>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span> 7 </span>
    								</div>
    								<h3><a>Terasa sakit di dada</a></h3>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span> 2 </span>
    								</div>
									<h3><a>Mudah lelah dan lemah</a></h3>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span> 5 </span>
    								</div>
    								<h3><a>Suhu badan tinggi (Demam)</a></h3>
    							</div>
    						</div>
							<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span> 8 </span>
    								</div>
    								<h3><a>Tubuh panas dingin</a></h3>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span> 3 </span>
    								</div>
    								<h3><a>Berkeringat di malam hari</a></h3>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span> 6 </span>
    								</div>
    								<h3><a>Kehilangan nafsu makan</a></h3>
    							</div>
    						</div>
							<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span> 9 </span>
    								</div>
    								<h3><a>Berat badan turun</a></h3>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
		
		<section class="ftco-facts img ftco-counter mt-5" style="background-image: url(images/bg_3.jpg);" id="doctor-section">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-md-5 heading-section heading-section-white">
						<span class="subheading">Fakta</span>
						<h2 class="mb-4">Penyakit TBC di Indonesia</h2>
					</div>
					<div class="col-md-7">
						<div class="row pt-4">
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number">824.000</strong>
		                <span>Penderita Sakit</span>
		              </div>
		            </div>
		            </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number">84%</strong>
		                <span>Pasien Sembuh</span>
		              </div>
		            </div>
		          </div>
				  <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number">93.000</strong>
		                <span>Kematian</span>
		              </div>
		            </div>
		          </div>
				  <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number">Peringkat 3</strong>
		                <span>Kasus Terbanyak (Dunia)</span>
		              </div>
		            </div>
		          </div>
	          </div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section contact-section" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Cek Kondisi Tubuh Anda</h2>
			<p>Masukkan gejala-gejala yang anda rasakan</p>
		  </div>
        </div>
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-6 d-flex">
    		<div class="img img-dept align-self-stretch" style="background-image: url(images/1.png);"></div>
    	  </div>
		  <div class="col-md-6 order-md-last ">
			<form action="cek.php" method="post">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" style="font-size:15px;" name="nama" placeholder="Isikan nama anda" required>
				</div>
				<div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin :</label>
                        <select name="jenis_kelamin" class="custom-select">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
				<div class="form-group">
					<label>Umur</label>
					<input type="number" class="form-control" style="font-size:15px;" name="umur" placeholder="Isikan umur anda" required>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" class="form-control" style="font-size:15px;" name="alamat" placeholder="Isikan alamat anda" required>
				</div>
				<?php
					$gejala = mysqli_query($koneksi, "SELECT * FROM gejala");
					foreach ($gejala as $per_gejala) :  
				?>
				<div class="form-group">
					<label><?= ucfirst($per_gejala['nama_gejala']) ?></label>
					<input type="number" class="form-control" style="font-size:15px;" name="<?= $per_gejala['kode_nama'] ?>" placeholder="<?= $per_gejala['isi'] ?>" min="<?= $per_gejala['bt_bawah'] ?>" max="<?= $per_gejala['bt_atas'] ?>" required><br>
					<?php
						endforeach;
					?>
				</div>
				<div class="form-group">
					<button name="diagnosa" class="btn btn-primary py-3 px-5">Diagnosa</button>
				</div>
			</form>

          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section img" style="background-image: url(images/footer-bg.jpg);">
      <div class="container-fluid px-md-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Hubungi Kami</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0821-2161-3261</span></a></li>
					<li><a href="#"><span class="icon icon-instagram"></span><span class="text">Kelompok_3</span></a></li>
					<li><a href="#"><span class="icon icon-facebook"></span><span class="text">Kel3_FB</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
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