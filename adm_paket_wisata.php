<?php
include 'koneksi.php';

// Query untuk mengambil semua data paket hotel dari database
$query = "SELECT * FROM pesan";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Paket Hotel</title>
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
  <style>
    .table-container {
    width: 80%; /* Lebar container */
    margin: 0 auto; /* Mengatur margin otomatis secara horizontal */
    text-align: center; /* Mengatur teks di dalam container menjadi tengah */
}

table {
    width: 100%; /* Lebar tabel */
}

  </style>
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
					<li class="nav-item active"><a href="adm_beranda.html" class="nav-link">Beranda</a></li>
					<li class="nav-item"><a href="adm_tentangkami.html" class="nav-link">Tentang Kami</a></li>
					<li class="nav-item"><a href="adm_paket_wisata.php" class="nav-link">Paket Hotel</a></li>
					<li class="nav-item"><a href="adm_buku_tamu.php" class="nav-link">Buku Tamu</a></li>
					<li class="nav-item"><a href="adm_rekomendasi.html" class="nav-link">Rekomendasi Vidio</a></li>
					<li class="nav-item"><a href="adm_galeri.html" class="nav-link">Galeri Kami</a></li>
				</ul>
			</div>
		</div>
	</nav>
 <!-- END nav -->
 
 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/baru/lima.webp');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="fa fa-chevron-right"></i></a></span> <span>Buku Tamu <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Daftar Pesanan</h1>
     </div>
   </div>
 </div>
</section>
<br> </br>

<div class="table-container">
<h2>Daftar Pesanan Paket Hotel</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemesan</th>
                <th>No HP</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Pesan</th>
                <th>Durasi</th>
                <th>Harga Paket</th>
                <th>Harga Paket Breakfast</th>
                <th>Diskon</th>
                <th>Jumlah Tagihan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$no}</td>";
                    echo "<td>{$row['namapemesan']}</td>";
                    echo "<td>{$row['nohp']}</td>";
                    echo "<td>{$row['jenis_kelamin']}</td>";
                    echo "<td>{$row['tanggalpesan']}</td>";
                    echo "<td>{$row['durasi']} hari</td>";
                    echo "<td>{$row['hargapaket']} orang</td>";
                    echo "<td>Rp {$row['hargapaketbf']}</td>";
                    echo "<td>{$row['diskon']}</td>";
                    echo "<td>Rp {$row['jumlahtagihan']}</td>";
                    echo "<td><a href='adm_edit_paket.php?id={$row['id']}'>Edit</a> | <a href='adm_hapus_paket.php?id={$row['id']}'>Hapus</a></td>";
                    echo "</tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='9'>Tidak ada data tersedia.</td></tr>";
            }
            ?>
        </tbody>
    </table>
          </div>
    <br></br>



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