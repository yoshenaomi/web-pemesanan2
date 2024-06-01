<?php
// Memasukkan file koneksi.php yang berisi koneksi ke database
include 'koneksi.php';

// Menonaktifkan laporan error untuk menghindari tampilan pesan error di halaman
error_reporting(0);

// Memulai session
session_start();

// Redirect ke halaman berhasil_login.php jika session 'username' sudah ada
if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
}

// Memproses form jika tombol submit ditekan
if (isset($_POST['submit'])) {
    // Mengambil nilai username dan password dari form
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Mengenkripsi password dengan md5 (tidak disarankan untuk pengamanan yang baik)

    // Mengeksekusi query SQL untuk memeriksa username dan password
    $sql = "SELECT * FROM users WHERE username='$username' AND password='admsatu'";
    $result = mysqli_query($conn, $sql);

    // Memeriksa apakah hasil query mengembalikan baris data lebih dari 0
    if ($result->num_rows > 0) {
        // Jika ditemukan data yang cocok, ambil data user dan set session 'username'
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];

        // Redirect ke halaman adm_beranda.html
        header("Location: adm_beranda.html");
    } else {
        // Jika tidak ditemukan data yang cocok, tampilkan pesan kesalahan dengan alert JavaScript
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/log.css">
    <title>Hotel KOKOON Banyuwangi | Login</title>
</head>

<body>

    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
    <div class="container">
        <div class="form-container sign-in">
            <form action="" method="POST" class="login-username">
                <h1 style="color: orange;">Login</h1>
                <br></br>
                <div class="input-group">
                <input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
                <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1 >Hallo, Pelanggan!</h1>
                    <p>Login Untuk Menggunakan Layanan Hotel Kami
                        <br><a href="index.html" class="btn btn-primary py-3 px-4">Beranda</a></br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/log.js"></script>
</body>

</html>