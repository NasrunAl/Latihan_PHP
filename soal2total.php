<?php
echo "<hr>--- Soal 2: Total Nilai Stok Buah --- <br>";

$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
// Buah pertama ada di indeks 0, namanya ada di indeks 0
echo "Nama buah pertama: " . $buah[0][0] . "<br><br>";

// 2. Hitung total nilai stok * harga
$totalNilai = 0;
foreach ($buah as $item) {
    // Harga ada di indeks 1, Stok ada di indeks 2
    $nilaiPerBuah = $item[1] * $item[2];
    $totalNilai += $nilaiPerBuah;
    echo "Total nilai " . $item[0] . ": Rp" . number_format($nilaiPerBuah) . "<br>";
}

echo "<br><b>Total nilai semua buah: Rp" . number_format($totalNilai) . "</b><br>";
?>