<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit;
}

include_once("./connect.php");

$query = mysqli_query($db , "SELECT * FROM buku");
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
    <h1 align ="center" >Daftar Buku Perpustakaan</h1>

    <table border="2" width ="100%" align="center"  cellspacing="10">
        <tr height ="50px" bgcolor ="lightblue" >
            <th width = 30%  >Nama</th>
            <th width = 15%>ISBN</th>
            <th width = 30%>Penulis</th>
            <th width = 10%>Jumlah</th>
            <th width = "15%x" >Action</th>
        </tr>

        <?php foreach ($query as $buku){ ?>
            <tr height ="30px" bgcolor ="lightgrey">
                <td><?php echo $buku["nama"]?></td>
                <td><?php echo $buku["isbn"]?></td>
                <td><?php echo $buku["penulis"]?></td>
                <td><?php echo $buku["jumlah"]?></td>

                <td>
                    <table border ="1" align="right">
                        <tr bgcolor ="lightgrey" >
                            <th width ="100px" align="center"> <a href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>EDIT</a></th>
                            <th width ="100px" align="center"> <a href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>HAPUS</a></th>
                        </tr>
                    </table>
                </td>
            </tr>

       <?php } ?>
    </table>
    
    <br><br><br>

    <table border ="2" align="center" cellspacing="10" width = "50%">
                        <tr bgcolor ="white">
                            <th width ="100px" align="center"> <a href="./tambah-buku.php">Tambahkan data buku</a></th>
                            <th width ="100px" align="center"> <a href="./cetak.php">Cetak daftar buku</a></th>
                            <th width ="100px" align="center"> <a href="./index.php">Kembali ke halaman utama</a></th>
                        </tr>
                    </table>
    
    <br>

</body>
</html>