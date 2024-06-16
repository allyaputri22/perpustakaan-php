<?php
include_once("koneksi.php");

$query = mysqli_query($koneksi, "SELECT * from produk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">bb
            </a>
        </div>
    </nav>
    
    <!-- Judul -->
     <div class="container">
        <h1>DAFTAR PRODUK</h1><br>
        <a href="tambah.php" type="button" class="btn btn-primary mb-5">Tambah Data</a>
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($query as $produk) { ?>
                <tr>
                    <td><?php echo $produk["nama"]; ?></td>
                    <td><?php echo $produk["stok"]; ?></td>
                    <td><?php echo $produk["harga"]; ?></td>
                    <td><?php echo $produk["gambar"]; ?></td>
                    <td><a href="delete.php?id=<?php echo $produk['id']; ?>" class="btn btn-danger-sm">Delete</a></td>
                    <td><a href="edit-produk.php?id=<?php echo $produk['id']; ?>" class="btn btn-success-sm">Edit</a></td>
                </tr>
            <?php } ?>
            </table>
        </div>
     </div>
</body>
</html>

