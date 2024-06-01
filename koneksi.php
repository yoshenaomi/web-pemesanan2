<?php
// Informasi untuk koneksi ke database
$servername = "localhost"; // Nama server database (biasanya localhost)
$database = "hotel"; // Nama database yang ingin diakses
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi pengguna database

// Melakukan koneksi ke database menggunakan mysqli_connect
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa apakah koneksi berhasil atau gagal
if (!$conn) {
    // Jika koneksi gagal, program akan berhenti dan menampilkan pesan error
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    // Jika koneksi berhasil, tidak melakukan apa pun (opsional: bisa digunakan untuk memberikan pesan sukses)
    echo ""; // Pesan sukses (opsional)
}
?>
