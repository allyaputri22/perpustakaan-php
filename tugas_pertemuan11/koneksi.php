<?php

$db = mysqli_connect("127.0.0.1", "root", "", "perpustakaan");

if (!$db) {
    die("Gagal Terkoneksi: " . mysqli_connect_error());
}

?>
