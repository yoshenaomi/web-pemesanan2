<?php
// Sambungkan ke database
include 'koneksi.php';

// Ambil ID paket dari parameter URL
$id = $_GET['id'];

// Query untuk mengambil data paket berdasarkan ID
$query = "SELECT * FROM tbl_registrasi WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Variabel untuk menyimpan nilai dari database
$namapemesan = $row['namapemesan'];
$nohp = $row['nohp'];
$tanggalpesan = $row['tanggalpesan'];
$durasi = $row['durasi'];
$jumlahpeserta = $row['jumlahpeserta'];
$hargapaket = $row['hargapaket'];
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

    <title>Edit Penawaran Paket Hotel</title>
</head>

<body>

    <div class="container mt-3">
        <h3>Edit Penawaran Paket Hotel</h3>
        <form action="plg_proses_edit.php" method="post" autocomplete="off">
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
            <div class="mb-3">
                <label for="tanggalpesan" class="form-label">Tanggal Pesan</label>
                <input type="date" class="form-control" id="tanggalpesan" name="tanggalpesan" value="<?php echo $tanggalpesan; ?>" required>
            </div>
            <div class="mb-3">
                <label for="durasi" class="form-label">Durasi (hari)</label>
                <input type="text" class="form-control" id="durasi" name="durasi" value="<?php echo $durasi; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jumlahpeserta" class="form-label">Jumlah Peserta</label>
                <input type="text" class="form-control" id="jumlahpeserta" name="jumlahpeserta" value="<?php echo $jumlahpeserta; ?>" required>
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
