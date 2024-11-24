<!-- 
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "praktikumdb");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Data yang akan dimasukkan
$username = "admin";
$password = password_hash("123", PASSWORD_DEFAULT); 

// SQL query untuk memasukkan data ke tabel user
$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

// Menjalankan query
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil dimasukkan";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?> -->
