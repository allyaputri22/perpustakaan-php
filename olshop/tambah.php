<?php
include_once("koneksi.php");

if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $stok = $_POST["stok"];
    $harga = $_POST["harga"];
    $gambar = $_FILES["gambar"]["name"];

    $target_dir = "img/";
    $tmpFile = $_FILES["gambar"]["tmp_name"];
    
    if(move_uploaded_file($tmpFile, $target_dir . $gambar)){
        $query = mysqli_query($koneksi , "INSERT INTO produk (nama, stok, harga, gambar) VALUES ('$nama', '$stok', '$harga', '$gambar')");
        
        if($query){
            echo "Data berhasil ditambahkan";
        } else {
            echo "Data gagal ditambahkan: " . mysqli_error($koneksi);
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="">bb</a>
    </div>
</nav>
<div class="container">
    <h1>Form Tambah Data Produk</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Ex: Minyak Goreng">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="text" name="stok" class="form-control" id="stok" placeholder="Ex: 20">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" name="harga" class="form-control" id="harga" placeholder="Ex: Rp. 12000,-">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
                <input type="file" name="gambar" class="form-control" id="gambar">
            </div>
        </div>

        <div class="mb-3 row mt-5">
            <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary">Tambahkan Data</button>
                <a href="produk.php" class="btn btn-danger">Batal</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
