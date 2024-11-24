<?php
include "koneksi.php";

// Pastikan data dikirim menggunakan metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menghindari undefined index error
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Hash password menggunakan md5 karena masih dalam query lama
    $password = md5($password); 

    // Query ke tabel user
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);
    $cek = mysqli_num_rows($result);

    if ($cek > 0) {
        echo "Anda berhasil login, silahkan menuju "; ?>
        <a href="homeAdmin.html">Halaman HOME</a>
        <?php
    } else {
        echo "Anda gagal login, silahkan "; ?>
        <a href="loginform.html">Login kembali</a>
        <?php
        echo mysqli_error($koneksi);
    }
} else {
    // Jika tidak menggunakan metode POST, tampilkan pesan error
    echo "Metode yang digunakan salah!";
}
?>
