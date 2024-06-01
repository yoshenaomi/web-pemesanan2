<?php
session_start();

// Cek apakah pengguna sudah login sebagai admin
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: df_login.html');
    exit();
}

// Tampilkan halaman dashboard admin di sini
echo "Selamat datang, Admin " . $_SESSION['username'];
// Tambahkan konten atau tautan lainnya untuk dashboard admin
?>
