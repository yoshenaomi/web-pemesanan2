<?php
session_start();

// Cek apakah pengguna sudah login sebagai pelanggan
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'pelanggan') {
    header('Location: df_login.html');
    exit();
}

// Tampilkan halaman dashboard pelanggan di sini
echo "Selamat datang, Pelanggan " . $_SESSION['username'];
// Tambahkan konten atau tautan lainnya untuk dashboard pelanggan
?>
