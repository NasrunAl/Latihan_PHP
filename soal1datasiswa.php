<?php
echo "--- Soal 1: Data Siswa --- <br>";

// Membuat array 2 dimensi berisi data 3 siswa
$siswa = [
    ["Budi", 80, 85], // Siswa ke-1: Nama, Nilai Matematika, Nilai Bahasa
    ["Siti", 90, 88], // Siswa ke-2
    ["Agus", 75, 92]  // Siswa ke-3
];

// Cetak nilai Bahasa dari siswa ke-2
// Siswa ke-2 ada di indeks 1, nilai Bahasa ada di indeks 2
echo "Nilai Bahasa siswa ke-2: " . $siswa[1][2] . "<br><br>";

// Cetak semua data menggunakan looping
echo "Semua Data Siswa: <br>";
foreach ($siswa as $data) {
    echo "Nama: " . $data[0] . ", Nilai Matematika: " . $data[1] . ", Nilai Bahasa: " . $data[2] . "<br>";
}
?>