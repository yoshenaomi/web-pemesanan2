<?php
// Sambungkan ke database
include 'koneksi.php';

// Ambil ID paket dari parameter URL
$id_pelanggan = $_GET['id_pelanggan'];

// Query untuk mengambil data paket berdasarkan ID
$query = "SELECT * FROM tbl_bukutamu WHERE id_pelanggan = $id_pelanggan";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Variabel untuk menyimpan nilai dari database
$nama_pelanggan = $row['nama_pelanggan'];
$nohp = $row['nohp'];
$alamat = $row['alamat'];
$tanggal_pesan = $row['tanggal_pesan'];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Buku Tamu</title>
</head>

<body>

    <div class="container mt-3">
        <h3>Edit Paket Hotel</h3>
        <form action="adm_prosesedit_bukutamu.php" method="post" autocomplete="off">
            <!-- Hidden input untuk menyimpan ID paket -->
            <input type="hidden" name="id_pelanggan" value="<?php echo $id_pelanggan; ?>">
            <div class="mb-3">
                <label for="nama_pelanggan" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?php echo $nama_pelanggan; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">Nomor HP</label>
                <input type="number" class="form-control" id="nohp" name="nohp" value="<?php echo $nohp; ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_pesan" class="form-label">Tanggal Pesan</label>
                <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" value="<?php echo $tanggal_pesan; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
