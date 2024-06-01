<?php
// Sambungkan ke database
include 'koneksi.php';

// Ambil ID paket dari parameter URL
$id = $_GET['id'];

// Query untuk mengambil data paket berdasarkan ID
$query = "SELECT * FROM pesan WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Variabel untuk menyimpan nilai dari database
$namapemesan = $row['namapemesan'];
$nohp = $row['nohp'];
$nohp = $row['jenis_kelamin'];
$tanggalpesan = $row['tanggalpesan'];
$durasi = $row['durasi'];
$hargapaket = $row['hargapaket'];
$hargapaketbf = $row['hargapaketbf'];
$jumlahtagihan = $row['jumlahtagihan'];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Paket Hotel</title>
</head>

<body>

    <div class="container mt-3">
        <h3>Edit Paket Hotel</h3>
        <form action="adm_proses_edit.php" method="post" autocomplete="off">
            <!-- Hidden input untuk menyimpan ID paket -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="mb-3">
                <label for="namapemesan" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="namapemesan" name="namapemesan" value="<?php echo $namapemesan; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">Nomor HP</label>
                <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $nohp; ?>" required>
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
            <div class="mb-3">
                <label for="tanggalpesan" class="form-label">Tanggal Pesan</label>
                <input type="date" class="form-control" id="tanggalpesan" name="tanggalpesan" value="<?php echo $tanggalpesan; ?>" required>
            </div>
            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi (hari)</label>
                <input type="text" class="form-control" id="durasi" name="durasi" value="<?php echo $durasi; ?>" required>
            </div>
            <div class="mb-3">
                <label for="hargapaket" class="form-label">Harga Paket</label>
                <input type="text" class="form-control" id="hargapaket" name="hargapaket" value="<?php echo $hargapaket; ?>" required>
            </div>
            <div class="mb-3">
                <label for="hargapaketbf" class="form-label">Jumlah Paket Breakfast</label>
                <input type="text" class="form-control" id="hargapaketbf" name="hargapaketbf" value="<?php echo $hargapaketbf; ?>" required>
            </div>
            <div class="mb-3">
                <label for="hargapaket" class="form-label">Harga Paket</label>
                <input type="text" class="form-control" id="hargapaket" name="hargapaket" value="<?php echo $hargapaket; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jumlahtagihan" class="form-label">Jumlah Tagihan</label>
                <input type="text" class="form-control" id="jumlahtagihan" name="jumlahtagihan" value="<?php echo $jumlahtagihan; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
