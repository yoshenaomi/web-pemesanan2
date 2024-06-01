<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form edit
    $id = $_POST['id'];
    $namapemesan = $_POST['namapemesan'];
    $nohp = $_POST['nohp'];
    $nohp = $_POST['jenis_kelamin'];
    $tanggalpesan = $_POST['tanggalpesan'];
    $durasi = $_POST['durasi'];
    $hargapaket = $_POST['hargapaket'];
    $hargapaketbf = $_POST['hargapaketbf'];
    $jumlahtagihan = $_POST['jumlahtagihan'];
    // Ambil field lainnya (No HP, Tanggal Pesan, Durasi, dll)

    // Lakukan proses update ke database
    $query = "UPDATE pesan SET namapemesan='$namapemesan' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect ke halaman sukses atau halaman lain setelah edit
        header('Location: adm_paket_wisata.php');
        exit();
    } else {
        echo "Gagal menyimpan perubahan.";
    }
}
?>