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
</head>
<body>
    <h1 align = "center">Daftar Staff Perpustakaan</h1>

    <table border="2">
        <tr>
            <th>Nama</th>
            <th>No. Tlp</th>
            <th>Email</th>
            <th>Action</th>
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

                            <a href="./tambah-staff.php">Tambahkan data staff</a><br>
                            <a href="./index.php">Kembali ke halaman utama</a>
                       
    
    <br>
    
    
</body>
</html>