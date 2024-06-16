<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit;
}

include_once("./connect.php");

$id = $_GET["id"];
$query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id = $id ");
$staff = mysqli_fetch_assoc($query_get_data);

if (isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];
    
    $query = mysqli_query($db , "UPDATE staff SET nama = '$nama', telp = '$telp', email = '$email'
    WHERE id =$id");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT STAFF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1>Form Edit Data Staff Perpustakaan</h1> 
   
   <form class ="form" action="" method="POST">
        <label for="nama">Nama</label>
        <input value = "<?php echo $staff['nama'] ?>" type="text" id="nama" name="nama">
        <br>
        <br>

        <label for="isbn">No. telp</label>
        <input value = "<?php echo $staff['telp'] ?>" type="text" id="telp" name="telp">
        <br>
        <br>

        <label for="email">Email</label>
        <input value = "<?php echo $staff['email'] ?>" type="text" id="email" name="email">
        <br>
        <br>


        <button type="submit" name="submit">Submit</button>
   </form>
   
    <br><br>
    <table border ="2" cellspacing="10" width = "50%">
                        <tr bgcolor ="white">
                            <th width ="100px" align="center">  <a href="./staff.php">Kembali ke Daftar Staff</a> <br></th>
                            <th width ="100px" align="center"> <a href="./index.php">Kembali ke halaman Utama</a></th>
                        </tr>
                    </table>
</body>
</html> 