<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $angka = (int)$_POST['angka'];

    // Cek apakah angka negatif
    if ($angka < 0) {
        echo "Angka tidak boleh negatif.";
        return;
    }

    if ($angka > 100) {
        echo "angka tidak boleh lebih dari 100.";
        return;
    }
    // Cek apakah bilangan kuadrat
    $akar = sqrt($angka);
    $isKuadrat = is_int($akar);

    if (!$isKuadrat) {
        echo "Angka yang Anda masukkan bukan bilangan kuadrat sempurna.";
    } else {
        echo "Halo, $nama. Angka $angka adalah bilangan kuadrat sempurna.";
    }
}
?>
