<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bukti Pemesanan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
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
         <li class="nav-item"><a href="index.html" class="nav-link text-blue">Kembali Ke Beranda</a></li>
       </ul>
     </div>
   </div>
 </nav>



    <!-- Content toast bahwa telah berhasil melakukan pemesanan paket wisata -->
    <div class="row mt-3" style="margin-left: 30px;">
        <div class="col-12 col-md-9">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat</strong> Pesanan anda berhasil tersimpan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!-- End content toast bahwa telah berhasil melakukan pemesanan paket wisata -->

            <!-- Script php untuk akses data dari tabel tbl_registrasi berdasarkan id yang ada ketika sesi itu -->
            <?php include 'koneksi.php';
            session_start();

            $id = $_SESSION['last_insert_id'];
            $data = mysqli_query($conn, "select * from pesan where id='$id'");
            while ($d = mysqli_fetch_array($data)) {
            ?>

                <!-- End script php -->

                <!-- Content bukti pemesanan paket wisata -->
                <div class="card" text-center>
                    <div class="card-header" style="font-weight:bold;">
                        BUKTI PEMESANAN KAMAR
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Nama</td>
                                <td><?= $d['namapemesan'] ?></td>
                            </tr>
                            <tr>
                                <td>Nomer Hp</td>
                                <td><?= $d['nohp'] ?></td>
                            </tr>
                            <tr>
                                <td>Nomer Identitas</td>
                                <td><?= $d['no_identitas'] ?></td> <!-- Menampilkan nomor identitas -->
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><?= $d['jenis_kelamin'] ?></td> <!-- Menampilkan jenis kelamin -->
                            </tr>
                            <tr>
                                <td>Tanggal Pesan</td>
                                <td><?= $d['tanggalpesan'] ?></td>
                            </tr>
                            <tr>
                                <td>Durasi</td>
                                <td><?= $d['durasi'] ?></td>
                            </tr>
                            <!-- <tr>
                                <td>Jumlah Peserta</td>
                                <td><?= $d['jumlahpeserta'] ?></td>
                            </tr> -->
                            <tr>
                                <td>Harga Paket</td>
                                <td><?= $d['hargapaket'] ?></td>
                            </tr>
                            <tr>
                                <td>Harga Breakfast</td>
                                <td><?= $d['hargapaketbf'] ?></td>
                            </tr>
                            <tr>
                                <td>Diskon</td>
                                <td><?php echo 'Rp ' . $d['diskon']; ?></td> <!-- Menampilkan nilai diskon dari database -->
                            </tr>
                            <tr>
                                <td>Jumlah Tagihan</td>
                                <td><?= $d['jumlahtagihan'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- End content bukti pemesanan tipe kamar lain -->

    <!-- Content untuk button pesan kembali -->
    <div class="card text-center" style="margin-top: 20px; margin-bottom: 20px">
        <span style="margin-bottom:5px">Pesan Tipe Kamar Lain? </span>
        <row style="margin-bottom:5px">
            <a href="plg_form_paket.php" class="btn btn-sm btn-primary">Iya</a>
            <a href="index.html" class="btn btn-sm btn-danger">Tidak</a>
        </row>
    </div>
    <!-- End content untuk button pesan kembali -->
</body>
</html>

</body>
</html>