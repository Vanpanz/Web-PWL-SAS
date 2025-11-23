<?php
// Konfigurasi Database (Ganti dengan kredensial Anda)
$host = 'localhost';
$database   = 'lamarkuy';
$user = 'root';
$pass = "";
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$database;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Ambil input dari form dan bersihkan (sanitize)
$perusahaan = $_GET['perusahaan'] ?? '';
$bidang     = $_GET['bidang'] ?? '';
$lokasi     = $_GET['lokasi'] ?? '';

// Bangun Query SQL secara dinamis
$sql = "SELECT * FROM lowongan WHERE 1=1"; // 'WHERE 1=1' memudahkan penambahan klausa AND

$params = [];

if (!empty($perusahaan)) {
    $sql .= " AND perusahaan LIKE ?";
    $params[] = '%' . $perusahaan . '%';
}

if (!empty($bidang)) {
    $sql .= " AND bidang LIKE ?";
    $params[] = '%' . $bidang . '%';
}

if (!empty($lokasi)) {
    $sql .= " AND lokasi LIKE ?";
    $params[] = '%' . $lokasi . '%';
}

// Jalankan Query
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $results = $stmt->fetchAll();

    // Tampilkan Hasil
    echo "<h2>Hasil Pencarian:</h2>";
    if ($results) {
        echo "<ul>";
        foreach ($results as $row) {
            echo "<li>**Perusahaan:** " . htmlspecialchars($row['perusahaan']) . ", **Bidang:** " . htmlspecialchars($row['bidang']) . ", **Lokasi:** " . htmlspecialchars($row['lokasi']) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Tidak ditemukan hasil.</p>";
    }

} catch (\PDOException $e) {
    // Handle error
    echo "Terjadi kesalahan database: " . $e->getMessage();
}
?>