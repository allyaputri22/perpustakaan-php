<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit;
}

include_once("./connect.php");

$id = $_GET["id"];
$query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id = $id ");
$buku = mysqli_fetch_assoc($query_get_data);

if (isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $isbn = $_POST["isbn"];
    $penulis = $_POST["penulis"];
    $jumlah = $_POST["jumlah"];
    
    $query = mysqli_query($db , "UPDATE buku SET nama = '$nama', isbn = '$isbn', penulis = '$penulis',jumlah =  $jumlah 
    WHERE id =$id");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT BUKU</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1>Form Edit Data Buku</h1> 
   
   <form class ="form" action="" method="POST">
        <label for="nama">Nama</label>
        <input value = "<?php echo $buku['nama'] ?>" type="text" id="nama" name="nama">
        <br>
        <br>

        <label for="isbn">ISBN</label>
        <input value = "<?php echo $buku['isbn'] ?>" type="text" id="isbn" name="isbn">
        <br>
        <br>

        <label for="penulis">Penulis</label>
        <input value = "<?php echo $buku['penulis'] ?>" type="text" id="penulis" name="penulis">
        <br>
        <br>

        <label for="jumlah">Jumlah</label>
        <input value = "<?php echo $buku['jumlah'] ?>" type="number" id="jumlah" name="jumlah">
        <br>
        <br>
        

        <button type="submit" name="submit">Submit</button>
   </form>
   
    <br><br>
    <table border ="2" cellspacing="10" width = "50%">
                        <tr bgcolor ="white">
                            <th width ="100px" align="center">  <a href="./buku.php">Kembali ke Daftar Buku</a> <br></th>
                            <th width ="100px" align="center"> <a href="./index.php">Kembali ke halaman Utama</a></th>
                        </tr>
                    </table>
</body>
</html> 