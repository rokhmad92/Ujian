<?php
// koneksi ke file lain
require 'functions.php';

// ketika tombol tambah di tekan
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
        alert ('data berhasil di tambah');
        document.location.href = 'index.php'
        </script>";
    } else {
        echo "<script>
        alert ('data gagal di tambah');
        </script>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Input!</title>
</head>
<body>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <td colspan="2" style="background-color:skyblue;text-align:center;">Input Data Email</td>
        </tr>
        <form action="" method="post" enctype="multipart/form-data">
            <tr style="background-color:chartreuse;">
                <td><label for="email">Email :</label></td>
                <td><input type="text" name="email" id="email" required></td>
            </tr>

            <tr style="background-color:chartreuse;">
                <td><label for="nama">Nama :</label></td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>

            <tr style="background-color:chartreuse;">
                <td><label for="user">User ID :</label></td>
                <td><input type="text" maxlength="3" name="user" id="user" required></td>
            </tr>

            <tr style="background-color:chartreuse;">
                <td><label for="gambar">Gambar :</label></td>
                <td><input type="file" name="gambar" id="gambar" required></td>
            </tr>

            <tr style="background-color:chartreuse;">
                <td colspan="2"><textarea name="keterangan" cols="40" rows="5" required></textarea></td>
            </tr>

            <tr style="background-color:chartreuse;">
                <td><button type="submit" name="submit">Simpan Data!</button></td>
            </form>
            <td><a href="index.php"><button>Kembali!</button></a></td>
        </tr>
    </table>
</body>
</html>