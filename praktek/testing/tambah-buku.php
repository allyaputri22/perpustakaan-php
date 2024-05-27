<?php
    include_once("./connect.php");

    
    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $penulis = $_POST["penulis"];
        $jumlah = $_POST["jumlah"];
        
        $query = mysqli_query($db , "INSERT INTO buku VALUES(
            NULL, '$nama', '$isbn', '$penulis', $jumlah
        )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH BUKU</title>
</head>
<body>
    <h1>Form tambah data buku</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br>
        <br>

        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn">
        <br>
        <br>

        <label for="penulis">Penulis</label>
        <input type="text" id="penulis" name="penulis">
        <br>
        <br>

        <label for="jumlah">Jumlah</label>
        <input type="number" id="jumlah" name="jumlah">
        <br>
        <br>

        <button type="submit" name="submit">SUBMIT</button>
    </form> <br>
    
    <a href="./buku.php">Kembali ke Daftar Buku</a> <br>
    <a href="./index.php">Kembali ke halaman Utama</a>
</body>
</html>