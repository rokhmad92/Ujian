<?php
// koneksi ke file lain
require 'functions.php';

$datas = query ("SELECT * FROM tb_email");
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Home!</title>
</head>
<body>
    <a href="tambah.php"><button>Tambah Data</button></a>
    <ul>
        <?php foreach ($datas as $data) : ?>
            <li><a href="ubah.php?id=<?= $data["id"] ?>"><?= $data['nama'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>