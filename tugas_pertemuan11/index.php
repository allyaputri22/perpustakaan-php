<?php
    session_start();

    if(!isset($_SESSION["email"])){
        header("Location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            text-align: center;
        }

        .link {
            display: block;
            margin-bottom: 10px;
            padding: 10px 20px;
            background-color: #6a0dae;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .link:hover {
            background-color: #6a0dae;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Aplikasi Perpustakaan</h1>
        
        <a class="link" href="./buku.php">Lihat daftar Buku</a>
        <a class="link" href="./staff.php">Lihat daftar Staff</a>
        <a class="link" href="./logout_proses.php">LOGOUT</a>
    </div>
</body>
</html>
