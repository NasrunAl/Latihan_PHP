<?php
// Memanggil file Controller
require_once "controller/BukuController.php";

// 1. Buat objek Controller
$controller = new BukuController();

// 2. Jalankan method 'index' dari Controller
$controller->index();
?>