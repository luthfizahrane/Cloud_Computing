<?php
require 'config.php';

if (!isset($_GET['id'])) {
    header("Location: manage.php");
    exit();
}

$id = intval($_GET['id']); // Sanitasi input

// Hapus barang
$conn->query("DELETE FROM barang WHERE id = $id");

$_SESSION['success'] = "Barang berhasil dihapus!";
header("Location: manage.php");
