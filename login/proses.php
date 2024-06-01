<?php
session_start();

// Koneksi ke database (ganti sesuai dengan detail database Anda)
$servername = "localhost";
$username = "username_database";
$password = "password_database";
$dbname = "nama_database";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Ambil data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Lindungi dari serangan SQL injection
$username = mysqli_real_escape_string($conn, $username);

// Ambil data pengguna dari database berdasarkan username
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Pengguna ditemukan, verifikasi password
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Password cocok, set session untuk pengguna
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        // Redirect ke halaman sesuai peran pengguna
        if ($_SESSION['role'] === 'admin') {
            header('Location: admin_dashboard.php');
            exit();
        } elseif ($_SESSION['role'] === 'pelanggan') {
            header('Location: pelanggan_dashboard.php');
            exit();
        }
    } else {
        // Password salah
        echo "Password salah. Silakan coba lagi.";
    }
} else {
    // Username tidak ditemukan
    echo "Username tidak ditemukan.";
}

// Tutup koneksi database
$conn->close();
?>
