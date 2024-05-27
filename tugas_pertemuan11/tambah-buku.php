<?php
    include_once("./koneksi.php");

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];
    
        $query = mysqli_query($db, "INSERT INTO buku VALUES (
            NULL, '$nama', '$isbn', $unit
            )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>FORM TAMBAH BUKU</title>

</head>
<body class="body">
    <h1 class="h1">Form Tambah Data BUKU</h1>

    <form class="form" action="" method="POST">
        <label class="label" for="nama">Nama</label>
        <input class="input" type="text" id="nama" name="nama">

        <br>
        <br>

        <label class="label" for="isbn">ISBN</label>
        <input class="input" type="text" id="isbn" name="isbn">

        <br>
        <br>
        
        <label class="label" for="unit">Unit</label>
        <input class="input" type="text" id="unit" name="unit">

        <br>
        <br>
        
        <button class="button" type="submit" name="submit">SUBMIT</button>
    </form>

    <br>
    <a class="a" href="./buku.php">Kembali ke Halaman Daftar Buku</a>
</body>
</html>
