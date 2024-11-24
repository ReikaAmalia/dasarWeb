<?php
$koneksi = mysqli_connect("localhost", "root", "", "praktikumdb"); // Ganti database menjadi 'user'

if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
