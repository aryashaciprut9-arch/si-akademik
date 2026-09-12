<?php
// ==========================================
// 1. Array 1 Dimensi (Penjumlahan & Pengurangan)
// ==========================================
$A1 = [8, 11, 25, 47, 53];
$B1 = [5, 6, 21, 63, 75];

$jumlah1D = [];
$kurang1D = [];

// Melakukan perhitungan dengan perulangan
for ($i = 0; $i < count($A1); $i++) {
    $jumlah1D[] = $A1[$i] + $B1[$i];
    $kurang1D[] = $A1[$i] - $B1[$i];
}

echo "=== Hasil Array 1 Dimensi ===\n";
echo "A + B = {" . implode(", ", $jumlah1D) . "}\n";
echo "A - B = {" . implode(", ", $kurang1D) . "}\n\n";
?>