<?php
$conn = mysqli_connect('localhost', 'root', '', 'rokhmad');

// function query untuk menampilkan semua data dalam table
function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

// function untuk menambah data
function tambah($data)
{
    global $conn;

    // mengambil data dari tambah.php
    $email = htmlspecialchars($data["email"]);
    $nama = htmlspecialchars($data["nama"]);
    $user = htmlspecialchars($data["user"]);
    $gambar = htmlspecialchars($_FILES['gambar']['name']);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $tmp_name = $_FILES['gambar']['tmp_name'];

    // query untuk menambah data
    $query = ("INSERT INTO tb_email VALUES ('', '$email', '$nama', '$keterangan', '$gambar', '$user')");
    move_uploaded_file($tmp_name, 'img/' . $gambar);

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// function untuk mengubah data dalam table
function edit($data) {
    global $conn;

    // mengambil seluruh data yang telah di isi dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $user = htmlspecialchars($data["user"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    // query untuk menambah data dalam database
    $query = "UPDATE tb_email SET 
                id = '',
                nama = '$nama',
                keterangan = '$keterangan',
                user = '$user',
                WHERE id = $id";
    // mysqli_query
    mysqli_query($conn, $query);
    // feedback untuk client
    return mysqli_affected_rows($conn);
}