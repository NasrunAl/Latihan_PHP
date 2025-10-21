<?php
class BukuView {

    public function tampilkan($bukuList) {
        echo "<h2>📚 Koleksi Buku Pilihan</h2>";
        
        // --- CSS BARU UNTUK TAMPILAN MODERN ---
        echo "<style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

            body { 
                font-family: 'Poppins', sans-serif; /* Font lebih modern */
                background-color: #f4f7f6; /* Latar belakang abu-abu lembut */
                color: #333;
                padding: 20px;
            }
            h2 {
                color: #2c3e50; /* Biru gelap */
                text-align: center;
                margin-bottom: 30px;
                font-weight: 600;
            }
            .container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 25px; /* Jarak antar kartu */
            }
            .card-buku {
                background: #ffffff;
                border-radius: 12px; /* Sudut lebih bulat */
                padding: 25px;
                width: 300px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.08); /* Shadow lebih lembut */
                transition: all 0.3s ease;
                display: flex; /* Menggunakan flexbox */
                flex-direction: column; /* Konten diatur vertikal */
                justify-content: space-between; /* Mendorong tombol ke bawah */
                min-height: 220px; /* Tinggi minimal agar kartu seragam */
            }
            .card-buku:hover {
                transform: translateY(-8px); /* Efek mengangkat lebih jelas */
                box-shadow: 0 10px 20px rgba(0,0,0,0.12);
            }
            .card-buku h3 {
                margin-top: 0;
                margin-bottom: 8px;
                color: #34495e; /* Biru tua untuk judul */
            }
            .card-buku p {
                margin: 0 0 10px 0;
                color: #555;
                font-size: 0.95em;
            }
            .card-buku span {
                display: block;
                color: #888;
                font-size: 0.9em;
                font-weight: 300;
                margin-top: auto; /* Mendorong ini ke atas, sebelum tombol */
                margin-bottom: 20px;
            }

            /* --- INI BAGIAN TOMBOL BARU ANDA --- */
            .btn-pinjam {
                display: inline-block;
                padding: 12px 20px;
                border: none;
                border-radius: 8px;
                color: #ffffff;
                font-weight: 600;
                font-family: 'Poppins', sans-serif;
                text-align: center;
                cursor: pointer;
                transition: all 0.3s ease;
                
                /* Warna Kekinian (Gradient) */
                background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
                box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            }
            .btn-pinjam:hover {
                transform: translateY(-2px); /* Efek tombol terangkat */
                box-shadow: 0 6px 12px rgba(0,0,0,0.2);
                opacity: 0.9;
            }
        </style>";
        // --- AKHIR DARI CSS ---

        echo "<div class='container'>";

        // Loop data buku dan tampilkan sebagai card
        foreach ($bukuList as $buku) {
            echo "<div class='card-buku'>";
            
            // Grup untuk info buku
            echo "<div>"; 
            echo "<h3>{$buku['judul']}</h3>";
            echo "<p>Oleh: {$buku['pengarang']}</p>";
            echo "<span>Tahun Terbit: {$buku['tahun']}</span>";
            echo "</div>";

            // Tombol diletakkan di bagian bawah kartu
            // (Note: Tombol ini belum berfungsi, hanya tampilan)
            echo "<button class='btn-pinjam'>Pinjam Buku</button>";
            
            echo "</div>"; // Penutup .card-buku
        }

        echo "</div>"; // Penutup .container
    }
}
?>