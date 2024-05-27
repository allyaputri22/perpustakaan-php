<?php
    include_once("./koneksi.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id = $id");

    $buku = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];
    
        $query = mysqli_query($db, "UPDATE buku SET nama='$nama',
        isbn='$isbn', unit=$unit WHERE id = $id");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>FORM EDIT BUKU</title>
</head>
<body class="body">
    <h1 class="h1">Form Tambah Edit Buku</h1>

    <form class="form" action="" method="POST">
        <label class="label" for="nama">Nama</label>
        <input class="input" value="<?php echo $buku['nama']?>" type="text" id="nama" name="nama">

        <br>
        <br>

        <label class="label" for="isbn">ISBN</label>
        <input class="input" value="<?php echo $buku['isbn'] ?>" type="text" id="isbn" name="isbn">

        <br>
        <br>
        
        <label class="label" for="unit">Unit</label>
        <input class="input" value="<?php echo $buku['unit']?>" type="text" id="unit" name="unit">

        <br>
        <br>
        
        <button class="button" type="submit" name="submit">SUBMIT</button>
    </form>

    <br>
    <a class="a" href="./buku.php">Kembali ke Halaman Daftar Buku</a>
</body>
</html>
