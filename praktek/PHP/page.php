<?php
    $data = ["Allya", "Putri", "Nadila", "Gustin"];
    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP IN HTML</title>
</head>
<body>
    <ul>
        <?php  
        for ($i=0; $i < count($data); $i++) { 
            echo "<li>" . $data[$i] . "</li>";
    }
    ?>
    </ul>
</body>
</html>