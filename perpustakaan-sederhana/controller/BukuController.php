<?php
// Memanggil file Model dan View yang dibutuhkan
require_once "model/Buku.php";
require_once "view/bukuView.php";

class BukuController {

    /**
     * Method default yang akan dipanggil
     */
    public function index() {
        // 1. Buat objek Model
        $model = new Buku();
        
        // 2. Buat objek View
        $view = new BukuView();

        // 3. Ambil data dari Model
        $bukuList = $model->getAllBuku();

        // 4. Kirim data ke View untuk ditampilkan
        $view->tampilkan($bukuList);
    }
}
?>