<?php
session_start();
require 'koneksi.php';

// Pastikan koneksi terhubung ke database
$koneksi = mysqli_connect("localhost", "root", "", "hotel");

// Ambil nilai dari atribut name pada form pemesanan
$nama = $_POST['namapemesan'];
$nohp = $_POST['nohp'];
$no_identitas = $_POST['no_identitas'];
$tanggalpesan = $_POST['tanggalpesan'];
$durasi = $_POST['durasi'];
$hargapaket = $_POST['hargapaket'];
$hargapaketbf = $_POST['hargapaketbf'];
$jumlahtagihan = $_POST['jumlahtagihan'];
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
$diskon = $_POST['diskon'];

// Query SQL untuk menambahkan data ke tabel tbl_registrasi
$query_sql = "INSERT INTO pesan (namapemesan, nohp, no_identitas, tanggalpesan, durasi, hargapaket, hargapaketbf, diskon, jenis_kelamin, jumlahtagihan) 
              VALUES ('$nama', '$nohp', '$no_identitas', '$tanggalpesan', '$durasi', '$hargapaket', '$hargapaketbf', '$diskon', '$jenis_kelamin', '$jumlahtagihan')";

// Eksekusi query SQL
if(mysqli_query($koneksi, $query_sql)) {
    $last_id = mysqli_insert_id($koneksi); // Dapatkan ID terakhir yang dimasukkan
    $_SESSION['last_insert_id'] = $last_id; // Simpan ID dalam session

    // Redirect ke halaman kwitansi
    header("Location: plg_simpan_paket.php");
    exit(); // Hentikan eksekusi script
} else {
    // Jika query gagal dieksekusi, tampilkan pesan error
    echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
?>
