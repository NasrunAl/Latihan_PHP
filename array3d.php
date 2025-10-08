<?php
$array = [
    [ // Tabel 1 (indeks 0)
        ['elemen111', 'elemen112', 'elemen113'], // baris 1 (indeks 0)
        ['elemen121', 'elemen122', 'elemen123']  // baris 2 (indeks 1)
    ],
    [ // Tabel 2 (indeks 1)
        ['elemen211', 'elemen212', 'elemen213'], // baris 1 (indeks 0)
        ['elemen221', 'elemen222', 'elemen223']  // baris 2 (indeks 1)
    ]
];

// Mengakses:
// $array[0] -> Tabel 1
// $array[0][1] -> Baris 2 dari Tabel 1
// $array[0][1][2] -> Elemen ke-3 dari baris 2 di Tabel 1
echo $array[0][1][2]; 
?>