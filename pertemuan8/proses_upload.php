<?php

// Lokasi penyimpanan file unggahan
$targetDirectory = "images/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka dibuat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Cek apakah ada file yang diunggah
if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif']; // Ekstensi file yang diperbolehkan
    $maxFileSize = 5 * 1024 * 1024; // Batas ukuran file 5MB

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $targetFile = $targetDirectory . $fileName;

        // Validasi tipe file dan ukuran file
        if (in_array($fileExtension, $allowedExtensions) && $fileSize <= $maxFileSize) {
            if (move_uploaded_file($fileTmp, $targetFile)) {
                echo "Gambar $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah gambar $fileName.<br>";
            }
        } else {
            echo "Gambar $fileName tidak valid (ukuran terlalu besar atau format tidak didukung).<br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>
