<?php

    $var1 = $_GET['inputan_pertama']; //$_GET maka disini juga pakai get
    echo $var1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action ="" method ="GET">  <!-- kalau disini pake method "GET" maka yang di php juga harus GET -->
        <input type ="text" name="inputan_pertama" value=""></input> 
        <button type ="submit" name ="prosesdata">
            PROSES DATA
        </button>

    </form>
</body>
</html>