<?php
    require_once "Database.php";
    require_once "Produk.php";

    $db = new Database();
    $produk = new Produk($db->getConnection());

    $id = $_GET['id'];
    $data = $produk->cari($id);

    if (!$data) {
        die("Data tidak ditemukan!");
    }
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>

<body>

    <h1>Edit Produk</h1>

    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <p>
            Nama:
            <input type="text" name="nama"
                value="<?= htmlspecialchars($data['nama']) ?>">
        </p>

        <p>
            Harga:
            <input type="number" name="harga"
                value="<?= $data['harga'] ?>">
        </p>

        <p>
            Stok:
            <input type="number" name="stok"
                value="<?= $data['stok'] ?>">
        </p>

        <button type="submit">Simpan Perubahan</button>
        <a href="index.php">Batal</a>
    </form>

</body>

</html>