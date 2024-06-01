<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form edit
    $id = $_POST['id'];
    $namapemesan = $_POST['namapemesan'];
    // Ambil field lainnya (No HP, Tanggal Pesan, Durasi, dll)

    // Lakukan proses update ke database
    $query = "UPDATE tbl_registrasi SET namapemesan='$namapemesan' WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect ke halaman sukses atau halaman lain setelah edit
        header('Location: plg_list_paket.php');
        exit();
    } else {
        echo "Gagal menyimpan perubahan.";
    }
}
?>


