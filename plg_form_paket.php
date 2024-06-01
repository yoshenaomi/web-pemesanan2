<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buku Tamu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">KOKOON<span>Hotel Banyuwangi</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.html" class="nav-link">Beranda</a></li>
					<li class="nav-item"><a href="plg_tentangkami.html" class="nav-link">Tentang Kami</a></li>
					<li class="nav-item"><a href="plg_paket_wisata.php" class="nav-link">Paket Hotel</a></li>
					<li class="nav-item"><a href="plg_buku_tamu.php" class="nav-link">Buku Tamu</a></li>
					<li class="nav-item"><a href="plg_rekomendasi.html" class="nav-link">Rekomendasi Vidio</a></li>
					<li class="nav-item"><a href="plg_galeri.html" class="nav-link">Galeri Kami</a></li>
				</ul>
			</div>
		</div>
	</nav>
 <!-- END nav -->
 
 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/baru/baru.webp');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="fa fa-chevron-right"></i></a></span> <span>Form Paket Hotel <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Form Paket Hotel</h1>
     </div>
   </div>
 </div>
</section>

    <?php
    date_default_timezone_set("Asia/Bangkok");
    ?>

    <!-- Content form untuk pemesanan tipe kamar -->
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <h3 style="margin-top: 20px; 
      color: rgb(2, 2, 2); 
      text-align: center;
      font-weight: bolder;">Pesan Tipe Kamar</h3>
            <form action="plg_proses_paket.php" method="post" autocomplete="off" style="margin-left: 80px;">
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="namapemesan" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control form-control-sm" id="namapemesan" name="namapemesan" placeholder="" required>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="nohp" class="form-label">Nomor Hp</label>
                        <input type="text" class="form-control form-control-sm" id="nohp" name="nohp" placeholder="" required>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="no_identitas" class="form-label">Nomor Identitas</label>
                        <input type="text" class="form-control form-control-user" id="no_identitas" name="no_identitas" maxlength="16" placeholder="Nomor Identitas" required>
                        <small id="errorMessage" class="form-text text-danger"></small>
                    </div>
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <div class="">
                        <label for="">Jenis Kelamin</label>
                        <div class="form-group">
                            <label for="jenis_kelamin">Laki-laki</label>
                            <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
                        </div>
                        <div class="form-group">
                            <label for="perempuan">Perempuan</label>
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="tanggalpesan" class="form-label">Tanggal Pesan</label>
                        <input type="date" class="form-control form-control-sm" id="tanggalpesan" name="tanggalpesan" placeholder="" required>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="durasi" class="form-label">Durasi</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-sm" id="durasi" name="durasi" aria-describedby="basic-addon2" placeholder="" required> <br>
                            <span class="input-group-text" id="basic-addon2">hari</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- <div class="mb-3 col-12 col-3">
                        <label for="jumlahpeserta" class="form-label">Jumlah Orang</label>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control form-control-sm" id="jumlahpeserta" name="jumlahpeserta" aria-describedby="basic-addon2" placeholder="" required> <br>
                            <span class="input-group-text" id="basic-addon2">orang</span>
                        </div>
                    </div> -->
                    <div class="mb-3 col-12 col-md-6">
                        <div class="">
                            <label for="">Tipe Kamar</label>
                            <div class="d-lg-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="500000" id="standar" name="paket" onclick="sum_jumlah()">
                                    <label for="form-check-label" for="standar">standar room (Rp.500.000)</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1500000" id="deluxe" name="paket" onclick="sum_jumlah()">
                                    <label for="form-check-label" for="deluxe">deluxe room (Rp.1.500.000)</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="2000000" id="2000000" name="paket" onclick="sum_jumlah()">
                                    <label for="form-check-label" for="family">family room (Rp.2.000.000)</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 col-12 col-md-6">
                        <div class="">
                            <label for="">Layanan Breakfast</label>
                            <div class="d-lg-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="80000" id="breakfastya" name="paket1" onclick="sum_jumlah1()">
                                    <label for="form-check-label" for="breakfastya">dengan breakfast (Rp.80.000)</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="0" id="breakfastno" name="paket1" onclick="sum_jumlah1()">
                                    <label for="form-check-label" for="breakfastno">tanpa breakfast (Rp.0)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="hargapaket" class="form-label">Harga Tipe Kamar</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-addon2">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="hargapaket" name="hargapaket" aria-describedby="basic-addon2" placeholder="" required> <br>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="hargapaketbf" class="form-label">Harga Breakfast</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-addon2">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="hargapaketbf" name="hargapaketbf" aria-describedby="basic-addon2" placeholder="" required> <br>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="jumlahtagihan" class="form-label">Jumlah Tagihan</label>
                        <div class="input-group input-group-sm">
                            <span class="input-group-text" id="basic-addon2">Rp</span>
                            <input type="text" class="form-control form-control-sm" id="jumlahtagihan" name="jumlahtagihan" aria-describedby="basic-addon2" placeholder="" required>
                            <input type="hidden" id="diskon" name="diskon">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-sm btn-primary" style="margin-bottom: 20px;" name="submit" value=<?php echo date("h:i:sa"); ?>>Simpan</button>
                <button type="button" class="btn btn-sm btn-success" style="margin-bottom: 20px;" onclick="hitung()">Hitung</button>

            </form>
        </div>
    </div>
    <!-- End content form pemesanan paket wisata -->

    <!-- Script javascrpit untuk perhitungan -->
    <script type="text/javascript">
        // kode untuk alert
        document.addEventListener('DOMContentLoaded', function() {
            var noIdentitasInput = document.getElementById('no_identitas');
            var errorMessage = document.getElementById('errorMessage');

            noIdentitasInput.addEventListener('input', function() {
                if (this.value.length !== 16) {
                    errorMessage.textContent = 'Isian salah.. data harus 16 digit';
                } else {
                    errorMessage.textContent = '';
                }
            });
        });

        //script js untuk menghitung jumlah dari harga paket yang dipilih
        function sum_jumlah() {
            var paket = document.getElementsByName('paket');
            var hargapaket = 0;
            for (var i = 0; i < paket.length; i++) {
                if (paket[i].checked) {
                    hargapaket += parseFloat(paket[i].value);
                }
            }
            document.getElementsByName('hargapaket')[0].value = hargapaket;

            if (hargapaket == 0) {
                alert("Silakan Pilih Salah Satu")
            }
        }

        function sum_jumlah1() {
            var paket1 = document.getElementsByName('paket1');
            var hargapaketbf = 0;
            for (var i = 0; i < paket1.length; i++) {
                if (paket1[i].checked) {
                    hargapaketbf += parseFloat(paket1[i].value);
                }
            }
            document.getElementsByName('hargapaketbf')[0].value = hargapaketbf;

            if (hargapaketbf == 0) {
                alert("Silakan Pilih Salah Satu")
            }
        }
        //script js untuk menghitung jumlah total tagihan yang didasarkan hasil perkalian harga paket yang
        //dipilih dengan durasi serta jumlah peserta
        function hitung() {
            var hari = document.getElementById("durasi").value;
            var hpaket = document.getElementById("hargapaket").value;
            var hpaket1 = document.getElementById("hargapaketbf").value; //untuk breakfast
            var jumlahtagihantemp = parseInt(hari) * parseInt(hpaket);
            var jumlahtagihanbf = parseInt(hari) * parseInt(hpaket1); //untuk breakfast

            var diskon = 0;
            if (parseInt(hari) > 2) {
                diskon = jumlahtagihantemp * 0.1; // Menghitung diskon
                jumlahtagihantemp -= diskon; // Mengurangi diskon dari total tagihan
            }

            var jumlahtagihan = parseInt(jumlahtagihantemp) + parseInt(jumlahtagihanbf);
            document.getElementById("jumlahtagihan").value = jumlahtagihan;
            document.getElementById("diskon").value = diskon; // Menyimpan nilai diskon dalam input tersembunyi
        }
        //End script js perhitungan

        function checkInputLength() {
            var input = document.getElementById("no_identitas").value;

            if (input.length > 16) {
                alert("Isian kurang 16")
            }
        }
    </script>


<section class="ftco-intro ftco-section ftco-no-pt">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<div class="img"  style="background-image: url(images/baru/dua.webp);">
							<div class="overlay"></div>
							<h2>Kokoon Hotel Banyuwangi</h2>
							<p>Temukan penawaran eksklusif dari Kokoon Hotel Banyuwangi</p>
							<p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Terimakasih Telah Menggunakan Layanan Kami</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- <footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);"> -->
			<div class="container">
				<div class="row mb-5">
					<div class="col-md pt-5">
						<div class="ftco-footer-widget pt-md-5 mb-4">
							<h2 class="ftco-heading-2">Ada Pertanyaan Lain?</h2>
							<p>Sebagai titik awal yang ditunjuk untuk liburan kota Anda, Kokoon Hotel di Banyuwangi menawarkan surga yang menenangkan dari saat Anda tiba hingga keberangkatan Anda. 
								Menginap dan habiskan waktu di tempat yang ramai namun santai untuk merasakan layanan pribadi dan hangat kami. </p>
						</div>
					</div>
					<div class="col-md pt-5 border-left">
						<div class="ftco-footer-widget pt-md-5 mb-4">
							<h2 class="ftco-heading-2">Hubungi Kami</h2>
							<div class="block-23 mb-3">
								<ul>
									<li><span class="icon fa fa-map-marker"></span><span class="text">Jl. Raya Jember KM 7, Krajan, Dadapan, Kabat, Banyuwangi, Jawa Timur 68461</span></li>
									<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+62 333 338 6000</span></a></li>
									<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">contact-banyuwangi@kokoonhotelsvillas.com</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
  
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>