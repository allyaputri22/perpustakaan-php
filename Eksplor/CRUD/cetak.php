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
<style>
@media print {
	.no-print, .no-print *
	  {
	   display:none !important;
	   }
	
	}

</style>
<body>
    <div class="no-print">
        <h1 align ="center" >Daftar Buku Perpustakaan</h1>
</div>

    <table border="2" width ="100%" align="center"  cellspacing="10">
        <tr height ="50px" bgcolor ="lightblue" >
            <th width = 30%  >Nama</th>
            <th width = 15%>ISBN</th>
            <th width = 30%>Penulis</th>
            <th width = 10%>Jumlah</th>
        </tr>

        <?php foreach ($query as $buku){ ?>
            <tr height ="30px" bgcolor ="lightgrey">
                <td><?php echo $buku["nama"]?></td>
                <td><?php echo $buku["isbn"]?></td>
                <td><?php echo $buku["penulis"]?></td>
                <td><?php echo $buku["jumlah"]?></td>

            </tr>

       <?php } ?>
    </table>
    
    <br><br><br>
    
    <br>
     
    <script>
        window.print();
    </script>
    
</body>
</html>