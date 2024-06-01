<?php
session_start();

// Fungsi untuk menghubungkan ke database
function connectDB() {
    $servername = "localhost";  // Ganti dengan nama host Anda
    $username = "root";         // Ganti dengan username database Anda
    $password = "";             // Ganti dengan password database Anda
    $dbname = "pariwisata";     // Ganti dengan nama database Anda

    // Buat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error);
    }

    return $conn;
}

// Fungsi untuk memeriksa apakah username dan password cocok
function authenticateUser($conn, $username, $password, $role) {
    // Lindungi dari serangan SQL injection
    $username = mysqli_real_escape_string($conn, $username);

    // Ambil data pengguna dari database berdasarkan username dan role
    $sql = "SELECT * FROM users WHERE username = '$username' AND role = '$role'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Pengguna ditemukan, verifikasi password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password cocok, set session untuk pengguna
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];

            return true;  // Berhasil login
        } else {
            return false;  // Password salah
        }
    } else {
        return false;  // Username tidak ditemukan atau role tidak sesuai
    }
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = connectDB();

    // Ambil data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];  // Ambil peran (role) dari form

    // Lakukan autentikasi pengguna
    if (authenticateUser($conn, $username, $password, $role)) {
        // Redirect ke halaman sesuai peran pengguna
        if ($_SESSION['role'] === 'admin') {
            header('Location: admin_dashboard.php');
            exit();
        } elseif ($_SESSION['role'] === 'pelanggan') {
            header('Location: pelanggan_dashboard.php');
            exit();
        }
    } else {
        // Autentikasi gagal, tampilkan pesan error
        echo "Username, password, atau role salah. Silakan coba lagi.";
    }

    // Tutup koneksi database
    $conn->close();
}
?>
