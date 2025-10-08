<?php
echo "<hr>--- Soal 4: Matriks Acak --- <br>";

$matriks = [];
$totalSemuaElemen = 0;

// Membuat array 3x3 berisi angka acak (1-9)
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $angkaAcak = rand(1, 9);
        $matriks[$i][$j] = $angkaAcak;
        $totalSemuaElemen += $angkaAcak;
    }
}

// Cetak array dalam bentuk matriks (tabel)
echo "Matriks 3x3 Acak: <br>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
foreach ($matriks as $baris) {
    echo "<tr>";
    foreach ($baris as $nilai) {
        echo "<td>" . $nilai . "</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

// Hitung jumlah total semua elemen
echo "<b>Jumlah total semua elemen matriks: " . $totalSemuaElemen . "</b><br>";
?>