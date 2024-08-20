<?php
// Mengatur batas atas angka
$batas_atas = 100;

// Loop dari 1 hingga batas_atas
for ($i = 1; $i <= $batas_atas; $i++) {
    // Cek jika angka adalah ganjil
    if ($i % 2 != 0) {
        // Cetak angka ganjil
        echo $i . "<br>";
    }
}
