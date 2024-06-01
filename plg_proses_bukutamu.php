<?php 
require 'koneksi.php';

session_start();

// Ambil data dari formulir
$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$jenis_kelamin = $_POST['jenis_kelamin']; // Ambil jenis kelamin dari formulir

// Query SQL untuk memasukkan data ke dalam tabel
$query_sql = "INSERT INTO tbl_bukutamu (id_pelanggan, nama_pelanggan, nohp, alamat, tanggal_pesan, jenis_kelamin) 
              VALUES ('$id_pelanggan', '$nama_pelanggan', '$nohp', '$alamat', '$tanggal_pesan', '$jenis_kelamin')";

if(mysqli_query($conn, $query_sql)) {
    $last_id = mysqli_insert_id($conn);
    
    // Simpan ID dalam session
    $_SESSION['last_insert_id'] = $last_id;
    
    // Redirect ke halaman setelah proses simpan
    header("Location: plg_simpan_bukutamu.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
?>
