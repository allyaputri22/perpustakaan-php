<?php
    include_once("./koneksi.php");

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $no_telp = $_POST["no_telp"];
        $email = $_POST["email"];
    
        $query = mysqli_query($db, "INSERT INTO staff VALUES (
            NULL, '$nama', '$no_telp', '$email'
            )");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>FORM TAMBAH STAFF</title>
    
</head>
<body class="body">
    <h1 class="h1">Form Tambah Data Staff</h1>

    <form class="form" action="" method="POST">
        <label class="label" for="nama">Nama</label>
        <input class="input" type="text" id="nama" name="nama">

        <br>
        <br>

        <label class="label" for="no_telp">No   telp</label>
        <input class="input" type="text" id="no_telp" name="no_telp">

        <br>
        <br>
        
        <label class="label" for="email">email</label>
        <input class="input" type="text" id="email" name="email">

        <br>
        <br>
        
        <button class="button" type="submit" name="submit">SUBMIT</button>
    </form>

    <br>
    <a class="a" href="./staff.php">Kembali ke Halaman Daftar Buku</a>
</body>
</html>
