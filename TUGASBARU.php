<?php
// ========================
// Menu Utama
// ========================
echo "=== PROGRAM CONTOH PERCABANGAN ===<br>";
echo "1. Login Sederhana <br>";
echo "2. Cek Umur <br>";
echo "3. Diskon Belanja <br>";
echo "4. Menu Pilihan (Makanan) <br>";
echo "5. Nilai Ujian <br><br>";

// Anggap user memilih menu (bisa diganti sesuai kebutuhan)
$pilihan = 3; // <<== ubah angka ini untuk mencoba case lain

echo "Anda memilih menu $pilihan <br><br>";

// ========================
// Percabangan berdasarkan pilihan
// ========================
switch ($pilihan) {
    case 1:
        // Login sederhana
        $username = "admin";
        $password = "12345";

        $inputUser = "admin";
        $inputPass = "12345";

        if ($inputUser == $username && $inputPass == $password) {
            echo "Login berhasil. Selamat datang, $username!";
        } else {
            echo "Login gagal. Username atau password salah!";
        }
        break;

    case 2:
        // Cek umur
        $umur = 17;

        if ($umur >= 18) {
            echo "Anda boleh mengakses konten ini.";
        } else {
            echo "Maaf, umur Anda belum cukup.";
        }
        break;

    case 3:
        // Diskon belanja
        $totalBelanja = 250000;

        if ($totalBelanja >= 200000) {
            $diskon = 0.2;
        } elseif ($totalBelanja >= 100000) {
            $diskon = 0.1;
        } else {
            $diskon = 0;
        }

        $totalBayar = $totalBelanja - ($totalBelanja * $diskon);
        echo "Total belanja: Rp $totalBelanja <br>";
        echo "Diskon: " . ($diskon * 100) . "% <br>";
        echo "Total bayar: Rp $totalBayar";
        break;

    case 4:
        // Menu makanan
        $menu = 2;

        switch ($menu) {
            case 1:
                echo "Anda memilih Nasi Goreng.";
                break;
            case 2:
                echo "Anda memilih Mie Ayam.";
                break;
            case 3:
                echo "Anda memilih Bakso.";
                break;
            default:
                echo "Pilihan tidak tersedia.";
                break;
        }
        break;

    case 5:
        // Penilaian Ujian
        $nilai = 85;

        if ($nilai >= 90) {
            echo "Grade: A";
        } elseif ($nilai >= 75) {
            echo "Grade: B";
        } elseif ($nilai >= 60) {
            echo "Grade: C";
        } elseif ($nilai >= 40) {
            echo "Grade: D";
        } else {
            echo "Grade: E";
        }
        break;

    default:
        echo "Pilihan menu tidak tersedia.";
        break;
}
?>
