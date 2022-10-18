<?php 
// koneksi ke file lain
require 'functions.php';

// mengambil id dari index.php
$id = $_GET["id"];

// query untuk menampilkan data dari id yang telah di kirim oleh index.php
$data = query ("SELECT * FROM tb_email WHERE id = $id")[0];

// ketika tombol sumbit di tekan
if ( isset($_POST["sumbit"]) ) {
    if (update($_POST) > 0 ) {
        echo "<script>
        alert ('data berhasil di ubah');
        document.location.href = 'index.php'
        </script>";
    } else {
        echo "<script>
        alert ('data gagal di ubah');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data!</title>
</head>
<body>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $data["id"] ?>">
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td style="background-color: skyblue;text-align:center;" colspan="3">Form Update Data</td>
            <td rowspan="6"><img src="img/<?= $data['gambar'] ?>" alt="gambar" width="200px" height="180px"></td>
        </tr>
        <tr style="background-color: greenyellow;">
            <td>
                <label>Email :</label>
            </td>
            <td>
                <input type="text" readonly value="<?= $data['email'] ?>">
            </td>
        </tr>
        <tr style="background-color: greenyellow;">
            <td>
                <label for="user">User ID :</label>
            </td>
            <td>
                <input type="text" name="user" maxlength="3" id="user" required value="<?= $data['user'] ?>">
            </td>
        </tr>
        <tr style="background-color: greenyellow;">
            <td>
                <label for="nama">Nama :</label>
            </td>
            <td>
                <input type="text" name="nama" id="nama" required value="<?= $data['nama'] ?>">
            </td>
        </tr>
        <tr style="background-color: greenyellow;">
            <td>
                <label for="keterangan">keterangan :</label>
            </td>
            <td>
                <input type="text" name="keterangan" id="keterangan" required value="<?= $data['keterangan'] ?>">
            </td>
        </tr>
        <tr style="background-color: greenyellow;">
            <td>
                <button name="sumbit">Ubah Data!</button>
            </td>
            <td>
                <button><a href="hapus.php?id=<?= $data["id"] ?>" onclick="return confirm('Ingin Menghapus Data?')" style="text-decoration: none;color:black;">Hapus Data!</a></button>
                <button><a href="index.php" style="text-decoration: none;color:black;">Kembali!</a></button>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>