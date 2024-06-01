<?php
// Sambungkan ke database
include 'koneksi.php';

// Pastikan ID paket telah dikirim melalui parameter URL
if (isset($_GET['id'])) {
    // Tangkap nilai ID dari parameter URL
    $id = $_GET['id'];

    // Query untuk menghapus data paket berdasarkan ID
    $query = "DELETE FROM pesan WHERE id = $id";

    // Eksekusi query delete
    if (mysqli_query($conn, $query)) {
        // Jika penghapusan berhasil, redirect ke halaman utama
        header("Location: adm_paket_wisata.php");
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
