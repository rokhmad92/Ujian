<?php 
// koneksi ke file lain
require 'functions.php';

// mengambil id dari index.php
$id = $_GET["id"];

if ( isset($id) ) {
    if ( hapus($id) > 0 ) {
        echo "<script>
        alert ('data berhasil di hapus');
        document.location.href = 'index.php'
        </script>";
    } else {
        echo "<script>
        alert ('data gagal di hapus');
        </script>";
    } 
}
?>