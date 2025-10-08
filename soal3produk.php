<?php
echo "<hr>--- Soal 3: Produk Harga Tertinggi --- <br>";

$produk = [
    [
        "nama_produk" => "Laptop Gaming",
        "kategori" => "Elektronik",
        "harga" => 15000000,
        "rating" => 4.5
    ],
    [
        "nama_produk" => "Keyboard Mechanical",
        "kategori" => "Aksesoris Komputer",
        "harga" => 1200000,
        "rating" => 4.8
    ],
    [
        "nama_produk" => "Smartphone Flagship",
        "kategori" => "Elektronik",
        "harga" => 18500000,
        "rating" => 4.7
    ]
];

$produkTertinggi = null;
$hargaTertinggi = 0;

foreach ($produk as $item) {
    if ($item['harga'] > $hargaTertinggi) {
        $hargaTertinggi = $item['harga'];
        $produkTertinggi = $item;
    }
}

echo "Produk dengan harga tertinggi adalah: <br>";
echo "<b>Nama: " . $produkTertinggi['nama_produk'] . "</b><br>";
echo "Kategori: " . $produkTertinggi['kategori'] . "<br>";
echo "Harga: Rp" . number_format($produkTertinggi['harga']) . "<br>";
echo "Rating: " . $produkTertinggi['rating'] . "<br>";
?>