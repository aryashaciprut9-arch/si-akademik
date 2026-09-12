<?php
$A2 = [
    [5, 11, 27],
    [14, 16, 31],
    [12, 9, 15]
];

$B2 = [
    [2, 16, 4],
    [3, 7, 2],
    [12, 0, 18]
];

$jumlah2D = [];

echo "=== Hasil Array 2 Dimensi (A + B) ===\n";
// Melakukan perhitungan matriks dengan perulangan bersarang (nested loop)
for ($i = 0; $i < count($A2); $i++) {
    for ($j = 0; $j < count($A2[$i]); $j++) {
        $jumlah2D[$i][$j] = $A2[$i][$j] + $B2[$i][$j];
        // Menampilkan hasil langsung dengan format tab (\t)
        echo $jumlah2D[$i][$j] . "\t";
    }
    echo "\n"; // Pindah baris untuk setiap baris matriks
}

?>