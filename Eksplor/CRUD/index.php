<?php
session_start();

if(!isset($_SESSION['email'])){
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1 align = "center" >Aplikasi Perpustakaan</h1>

   <table border ="2" align ="center" cellspacing="10" width = "50%">
                        <tr bgcolor ="grey">
                            <th width ="100px" height= "50px"> <a href="./buku.php">Lihat daftar buku</a><br></th>
                            <th width ="100px"> <a href="./staff.php">Lihat daftar staff</a></th>
                        </tr>
                    </table>

                    <form align= "center"  action="logout.php" method="POST">
                        <button  type="submit">LOGOUT</button>
                    </form>
</body>
</html>