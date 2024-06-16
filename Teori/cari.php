<?php
include "koneksi.php";

$kata_kunci = $_POST['tcari'];
$query = "SELECT * FROM mahasiswa WHERE id LIKE '%$kata_kunci%' OR nama LIKE '%$kata_kunci%' OR prodi LIKE '%$kata_kunci%'";
$proses = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - Hasil Pencarian</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <form action="cari.php" method="POST">
        <input type="text" name="tcari" placeholder="Masukkan Kata Kunci">
        <button type="submit" name="bcari">Cari</button>
    </form>

    <div class="span9" id="content">
        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Data Mahasiswa - Hasil Pencarian</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NPM Mahasiswa</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Prodi Mahasiswa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($data = mysqli_fetch_assoc($proses)) {
                                ?>
                                <tr>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['prodi']; ?></td>
                                    <td><a href="pert11.php?id=<?php echo $data['id']; ?>">Edit</a> | <a href="pert12-hapus.php?id=<?php echo $data['id']; ?>">Hapus</a></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="pert11.php" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
