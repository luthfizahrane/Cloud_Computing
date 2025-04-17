<?php
require 'config.php';

$sql = "CREATE TABLE IF NOT EXISTS transaksi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item VARCHAR(50) NOT NULL,
    harga INT NOT NULL,
    jumlah INT NOT NULL,
    subtotal INT NOT NULL,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql)) {
    echo "Tabel transaksi berhasil dibuat";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>