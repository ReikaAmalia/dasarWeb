<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_name_parts = explode('.', $file_name);
    $file_ext = strtolower(end($file_name_parts));
    $allowed_extensions = array("pdf", "doc", "docx", "txt");

    // Memeriksa ekstensi file
    if (in_array($file_ext, $allowed_extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }

    // Memeriksa ukuran file (maksimum 2 MB)
    if ($file_size > 2097152) {
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }

    // Jika tidak ada kesalahan, unggah file
    if (empty($errors)) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode(", ", $errors);
    }
}
?>