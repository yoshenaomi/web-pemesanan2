<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form edit
    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $tanggal_pesan = $_POST['tanggal_pesan'];
    // Ambil field lainnya (No HP, Tanggal Pesan, Durasi, dll)

    // Lakukan proses update ke database
    $query = "UPDATE tbl_bukutamu SET 
          nama_pelanggan='$nama_pelanggan', 
          nohp='$nohp', 
          alamat='$alamat', 
          tanggal_pesan='$tanggal_pesan' 
          WHERE id_pelanggan='$id_pelanggan'";
          
    // Eksekusi kueri SQL
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect ke halaman sukses atau halaman lain setelah edit
        header('Location: adm_buku_tamu.php');
        exit();
    } else {
        // Tampilkan pesan kesalahan jika kueri gagal dieksekusi
        echo "Gagal menyimpan perubahan.";
    }
}
?>
