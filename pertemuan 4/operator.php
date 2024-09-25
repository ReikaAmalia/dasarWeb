<?php
$a = 10;
$b = 5;


$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: $a + $b = $hasilTambah<br>";
echo "Hasil Kurang: $a - $b = $hasilKurang<br>";
echo "Hasil Kali: $a * $b = $hasilKali<br>";
echo "Hasil Bagi: $a / $b = $hasilBagi<br>";
echo "Hasil Sisa Bagi: $a % $b = $sisaBagi<br>";
echo "Hasil Pangkat: $a ** $b = $pangkat<br>";

echo "<br> <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "$a == $b : " . ($hasilSama ? 'True' : 'False') . "<br>";
echo "$a != $b : " . ($hasilTidakSama ? 'True' : 'False') . "<br>";
echo "$a < $b : " . ($hasilLebihKecil ? 'True' : 'False') . "<br>";
echo "$a > $b : " . ($hasilLebihBesar ? 'True' : 'False') . "<br>";
echo "$a <= $b : " . ($hasilLebihKecilSama ? 'True' : 'False') . "<br>";
echo "$a >= $b : " . ($hasilLebihBesarSama ? 'True' : 'False') . "<br>";

echo "<br> <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;


echo "$a && $b : " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "$a || $b : " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "!$a : " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "!$b : " . ($hasilNotB ? 'True' : 'False') . "<br>";

echo "<br> <br>";

$a += $b;
echo "Hasil setelah A += B: $a <br>";

$a -= $b;
echo "Hasil setelah A -= B: $a <br>";

$a *= $b;
echo "Hasil setelah A *= B: $a <br>";

$a /= $b;
echo "Hasil setelah A /= B: $a <br>";

$a %= $b;
echo "Hasil setelah A %= B: $a <br>";

echo "<br> <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "\$a === \$b : " . ($hasilIdentik ? 'True' : 'False') . "<br>";
echo "\$a !== \$b : " . ($hasilTidakIdentik ? 'True' : 'False') . "<br>";
?>