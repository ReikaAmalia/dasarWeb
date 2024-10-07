<?php
function tampilkanAngka(int $jumlah, int $indexs = 1){
    echo "Perulangan ke- {$indexs} <br>";
    if ($indexs < $jumlah) {
        tampilkanAngka($jumlah, $indexs + 1);
    }
}

tampilkanAngka(20);

for ($i=1; $i <=25 ; $i++) {
    echo "perulangan ke-{$i} <br>";
}
?>