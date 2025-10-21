<?php
class Alat {
    // Data dummy untuk alat olahraga
    private $dataAlat = [
        ["id" => "B01", "nama" => "Bola Basket", "status" => "Tersedia"],
        ["id" => "R01", "nama" => "Raket Badminton", "status" => "Dipinjam"],
        ["id" => "S01", "nama" => "Skiping", "status" => "Tersedia"],
        ["id" => "M01", "nama" => "Matras Yoga", "status" => "Tersedia"]
    ];

    /**
     * Mengambil semua data alat
     */
    public function getAllAlat() {
        return $this->dataAlat;
    }
}
?>