<?php
require_once "Database.php";
require_once "Produk.php";

$db = new Database();
$produk = new Produk($db->getConnection());

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produk->ubah(
        $_POST['id'],
        $_POST['nama'],
        $_POST['harga'],
        $_POST['stok']
    );

    header("Location: index.php");
    exit;
}
?>