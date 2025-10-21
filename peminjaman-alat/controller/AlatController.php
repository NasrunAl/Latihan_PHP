<?php
// Memanggil file Model dan View yang dibutuhkan
require_once "model/Alat.php";
require_once "view/alatView.php";

class AlatController {

    /**
     * Method default yang akan dipanggil
     */
    public function index() {
        // 1. Buat objek Model
        $model = new Alat();
        
        // 2. Buat objek View
        $view = new AlatView();

        // 3. Ambil data dari Model
        $alatList = $model->getAllAlat();

        // 4. Kirim data ke View untuk ditampilkan
        $view->tampilkan($alatList);
    }
}
?>