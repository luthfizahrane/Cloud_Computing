<?php
require 'config.php';

$id = intval($_GET['id']);

// Dapatkan data transaksi untuk update stok
$transaksi = $conn->query("SELECT * FROM transaksi1 WHERE id = $id")->fetch_assoc();
$conn->query("UPDATE barang SET stok = stok + {$transaksi['jumlah']} WHERE id = {$transaksi['barang_id']}");

// Hapus transaksi
$conn->query("DELETE FROM transaksi1 WHERE id = $id");

$_SESSION['success'] = "Transaksi dihapus & stok dikembalikan!";
header("Location: index.php");
