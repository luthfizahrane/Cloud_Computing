<?php
$db_host = "database-1.cta20a2sck3e.us-east-1.rds.amazonaws.com";
$db_username = "admin";
$db_password = "password-anda";
$db_name = "kasir_pakaian";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
