<?php
class AlatView {

    /**
     * Menampilkan daftar alat ke browser
     */
    public function tampilkan($alatList) {
        echo "<h2>Daftar Alat Olahraga</h2>";
        
        // Menambahkan sedikit style untuk status
        echo "<style>
                .tersedia { color: green; font-weight: bold; }
                .dipinjam { color: red; font-weight: bold; }
              </style>";

        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<thead>
                <tr>
                    <th>ID Alat</th>
                    <th>Nama Alat</th>
                    <th>Status</th>
                </tr>
              </thead>";
        echo "<tbody>";

        // Loop data alat
        foreach ($alatList as $alat) {
            // Tentukan class CSS berdasarkan status
            $statusClass = ($alat['status'] == 'Tersedia') ? 'tersedia' : 'dipinjam';

            echo "<tr>";
            echo "<td>{$alat['id']}</td>";
            echo "<td>{$alat['nama']}</td>";
            echo "<td class='{$statusClass}'>{$alat['status']}</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    }
}
?>