<?php
// Memanggil file Controller
require_once "controller/AlatController.php";

// 1. Buat objek Controller
$controller = new AlatController();

// 2. Jalankan method 'index' dari Controller
$controller->index();
?>