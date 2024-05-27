<?php

session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit;
}

include_once("./connect.php");

if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];
    
    $query = mysqli_query($db , "INSERT INTO staff VALUES(
        NULL, '$nama', '$telp', '$email'
    )");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH STAFF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1>Form Tambah Data Staff Perpustakaan</h1> 
   
   <form class ="form" action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br>
        <br>

        <label for="telp">No. Telp</label>
        <input type="text" id="telp" name="telp">
        <br>
        <br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <br>
        <br>

        <button type="submit" name="submit">Submit</button>
   </form>

   <br><br>
   <table border ="2" cellspacing="10" width = "50%">
                        <tr bgcolor ="white">
                            <th width ="100px" align="center">  <a href="./staff.php">Kembali ke Daftar Staff</a> <br></th>
                            <th width ="100px" align="center">  <a href="./index.php">Kembali ke halaman Utama</a></th>
                        </tr>
                    </table>
</body>
</html>