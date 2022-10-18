<?php
require_once "functions.php";

// mengambil id dari index.php
$id = $_GET["id"];

// query untuk menampilkan data dari id yang telah di kirim oleh index.php
$data = query ("SELECT * FROM tb_email WHERE id = $id")[0];

// ketika tombol sumbit di tekan
if (isset($_POST["submit"]) ) {
    if (edit($_POST) > 0 ) {
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
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Ubah!</title>
</head>
<body>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <td colspan="2" style="background-color:skyblue;text-align:center;">Ubah Data Email</td>
            <td rowspan="7"><img src="img/<?= $data['gambar'] ?>" width="200px" height="180px" alt="gambar"></td>
        </tr>
            <tr style="background-color:chartreuse;">
                <form action="" method="post">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <td><label for="email">Email :</label></td>
                <td><input type="text" value="<?= $data['email'] ?>" readonly></td>
            </tr>

            <tr style="background-color:chartreuse;">
                <td><label for="nama">Nama :</label></td>
                <td><input type="text" name="nama" id="nama" required value="<?= $data['nama'] ?>"></td>
            </tr>

            <tr style="background-color:chartreuse;">
                <td><label for="user">User ID :</label></td>
                <td><input type="text" maxlength="3" name="user" id="user" required value="<?= $data['user'] ?>"></td>
            </tr>

            <tr style="background-color:chartreuse;">
                <td colspan="2"><input type="text" name="keterangan" value="<?= $data['keterangan'] ?>" required></td>
            </tr>

            <tr style="background-color:chartreuse;">
                <td><button type="submit" name="submit">Simpan Data!</button></td>
            </form>
            <td>
                <a href="index.php"><button>Hapus!</button></a>
                <a href="index.php"><button>Kembali!</button></a>
            </td>
        </tr>
    </table>
</body>
</html>