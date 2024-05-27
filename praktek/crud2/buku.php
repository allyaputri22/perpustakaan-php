

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
    <title>Daftar Buku Perpustakaan</title>
</head>
<body>
    <h1>Daftar Buku Perpustakaan</h1>

    <table border="2">
        <tr>
            <th>Nama</th>
            <th>ISBN</th>
            <th>Penulis</th>
            <th>Jumlah</th>
            <th>Action</th>
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

                           <a href="./tambah-buku.php">Tambahkan data buku</a><br>
                            <a href="./index.php">Kembali ke halaman utama</a>
                       
    <br>
    
    
</body>
</html>