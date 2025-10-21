<?php
class Buku {
    // Data dummy untuk buku
    private $dataBuku = [
        [
            "judul" => "Atomic Habits", 
            "pengarang" => "James Clear", 
            "tahun" => 2018
        ],
        [
            "judul" => "Laskar Pelangi", 
            "pengarang" => "Andrea Hirata", 
            "tahun" => 2005
        ],
        [
            "judul" => "Bumi Manusia", 
            "pengarang" => "Pramoedya Ananta Toer", 
            "tahun" => 1980
        ],
        [
            "judul" => "Harry Potter and the Sorcerer's Stone", 
            "pengarang" => "J.K. Rowling", 
            "tahun" => 1997
        ]
    ];

    /**
     * Mengambil semua data buku
     */
    public function getAllBuku() {
        return $this->dataBuku;
    }
}
?>