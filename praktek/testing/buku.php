<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <table border ="1">
        <tr>
            <td>Nama</td>
            <td>ISBN</td>
            <td>Penulis</td>
            <td>Jumlah</td>
            <td>Action</td>
        </tr>

        <?php foreach ($query as $buku) { ?>
            <tr>
                <td><?php echo $buku["nama"]?></td>
                <td><?php echo $buku["isbn"]?></td>
                <td><?php echo $buku["penulis"]?></td>
                <td><?php echo $buku["jumlah"]?></td>
                <td>
                    <a href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>EDIT</a>
                    <a href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>| HAPUS</a>
                </td>
            </tr>
            <?php } ?>
    </table> <br>
    <a href="./tambah-buku.php">Tambah Data Buku</a> <br>
    <a href="./index.php">Kembali ke halaman Utama</a>
</body>
</html>