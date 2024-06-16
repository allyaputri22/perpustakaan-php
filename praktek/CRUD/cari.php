<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

include_once("./connect.php");

if (isset($_POST['bcari'])) {
    $keyword = $_POST['tcari'];
    $query = "SELECT * FROM buku WHERE nama LIKE '%$keyword%' OR isbn LIKE '%$keyword%' OR penulis LIKE '%$keyword%' ORDER BY id DESC";
} else {
    $query = "SELECT * FROM buku ORDER BY id DESC";
}

$tampil = mysqli_query($db, $query);
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
    <h1 align="center">Daftar Buku Perpustakaan</h1>
    <form action="cari.php" method="POST">
        <input type="text" name="tcari" placeholder="Masukkan Kata Kunci">
        <button type="submit" name="bcari">Cari</button>
        <button type="reset" onclick="window.location.href='buku.php'">Reset</button>
    </form>
    <table border="2" width="100%" align="center" cellspacing="10">
        <tr height="50px" bgcolor="lightblue">
            <th width="30%">Nama</th>
            <th width="15%">ISBN</th>
            <th width="30%">Penulis</th>
            <th width="10%">Jumlah</th>
            <th width="15%">Action</th>
        </tr>

        <?php if (mysqli_num_rows($tampil) > 0): ?>
            <?php while ($buku = mysqli_fetch_array($tampil)): ?>
                <tr height="30px" bgcolor="lightgrey">
                    <td><?php echo $buku["nama"] ?></td>
                    <td><?php echo $buku["isbn"] ?></td>
                    <td><?php echo $buku["penulis"] ?></td>
                    <td><?php echo $buku["jumlah"] ?></td>
                    <td>
                        <table border="1" align="right">
                            <tr bgcolor="lightgrey">
                                <th width="100px" align="center"><a href="<?php echo "edit-buku.php?id=" . $buku["id"] ?>">EDIT</a></th>
                                <th width="100px" align="center"><a href="<?php echo "delete-buku.php?id=" . $buku["id"] ?>">HAPUS</a></th>
                            </tr>
                        </table>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" align="center">Tidak ada buku yang ditemukan</td>
            </tr>
        <?php endif; ?>
    </table>

    <br><br><br>

    <table border="2" align="center" cellspacing="10" width="50%">
        <tr bgcolor="white">
            <th width="100px" align="center"><a href="./tambah-buku.php">Tambahkan data buku</a></th>
            <th width="100px" align="center"><a href="./index.php">Kembali ke halaman utama</a></th>
        </tr>
    </table>

    <br>
</body>
</html>


<!-- Query mebambah kolom -->
<!-- ALTER TABLE nama_tabel
ADD COLUMN nama_kolom_gambar VARCHAR(255) NOT NULL; -->