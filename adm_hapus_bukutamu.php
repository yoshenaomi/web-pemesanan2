<?php
// Sambungkan ke database
include 'koneksi.php';

// Pastikan ID paket telah dikirim melalui parameter URL
if (isset($_GET['id_pelanggan'])) {
    // Tangkap nilai ID dari parameter URL
    $id_pelanggan = $_GET['id_pelanggan'];

    // Query untuk menghapus data paket berdasarkan ID
    $query = "DELETE FROM tbl_bukutamu WHERE id_pelanggan = $id_pelanggan";

    // Eksekusi query delete
    if (mysqli_query($conn, $query)) {
        // Jika penghapusan berhasil, redirect ke halaman utama
        header("Location: adm_buku_tamu.php");
        exit;
    } else {
        // Jika terjadi kesalahan dalam menghapus data
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Jika tidak ada ID yang dikirimkan melalui parameter URL
    echo "ID tidak ditemukan";
}

// Tutup koneksi database
mysqli_close($conn);
?>
