<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "user");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// SQL query untuk membuat tabel user
$sql = "CREATE TABLE user (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Menjalankan query
if (mysqli_query($koneksi, $sql)) {
    echo "Tabel user berhasil dibuat";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>