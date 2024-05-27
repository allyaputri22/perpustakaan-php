<?php

session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit;
}

include_once("./connect.php");

$query = mysqli_query($db , "SELECT * FROM staff");
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
    <h1 align = "center">Daftar Staff Perpustakaan</h1>

    <table border="2" width ="100%" align="center"  cellspacing="10">
        <tr height ="50px" bgcolor ="lightblue" >
            <th width = 30%  >Nama</th>
            <th width = 15%>No. Tlp</th>
            <th width = 30%>Email</th>
            <th width = "15%x" >Action</th>
        </tr>

        <?php foreach ($query as $staff){ ?>
            <tr height ="30px" bgcolor ="lightgrey">
                <td><?php echo $staff["nama"]?></td>
                <td><?php echo $staff["telp"]?></td>
                <td><?php echo $staff["email"]?></td>
                <td>
                    <table border ="1" align="right">
                        <tr bgcolor ="lightgrey" >
                            <th width ="100px" align="center"> <a href=<?php echo "edit-staff.php?id=" . $staff["id"] ?>>EDIT</a></th>
                            <th width ="100px" align="center"> <a href=<?php echo "delete-staff.php?id=" . $staff["id"] ?>>HAPUS</a></th>
                        </tr>
                    </table>
                </td>
            </tr>

       <?php } ?>
    </table>
    
    <br><br><br>

    <table border ="2" align="center" cellspacing="10" width = "50%">
                        <tr bgcolor ="white">
                            <th width ="100px" align="center"> <a href="./tambah-staff.php">Tambahkan data staff</a></th>
                            <th width ="100px" align="center"> <a href="./index.php">Kembali ke halaman utama</a></th>
                        </tr>
                    </table>
    
    <br>
    
    
</body>
</html>