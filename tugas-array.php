<?php

// 1. Inisialisasi Matriks A dan B
$matrixA = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

$matrixB = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// 2. Siapkan array kosong untuk menyimpan hasil penjumlahan
$hasilMatrix = [];

// 3. Proses penjumlahan menggunakan looping
// Loop pertama ($baris) untuk iterasi baris (dari 0 sampai 2)
for ($baris = 0; $baris < 3; $baris++) {
    // Loop kedua ($kolom) untuk iterasi kolom (dari 0 sampai 2)
    for ($kolom = 0; $kolom < 3; $kolom++) {
        // Menjumlahkan elemen matriks A dan B pada posisi yang sama
        $hasilMatrix[$baris][$kolom] = $matrixA[$baris][$kolom] + $matrixB[$baris][$kolom];
    }
}

// 4. Tampilkan hasil matriks
echo "<h2>Hasil Penjumlahan Matriks A dan B</h2>";
echo "<pre>"; // Menggunakan tag <pre> agar format teks rapi

for ($baris = 0; $baris < 3; $baris++) {
    for ($kolom = 0; $kolom < 3; $kolom++) {
        // Cetak setiap elemen diikuti dengan spasi
        echo $hasilMatrix[$baris][$kolom] . " ";
    }
    // Pindah baris baru setelah satu baris matriks selesai dicetak
    echo "<br>";
}

echo "</pre>";

?>