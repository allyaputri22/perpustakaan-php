<?php
    $nilai =  [1,2,3,4,5];
    $total = 0;

    foreach($nilai as $nilairat){
        $total += $nilairat;
    }
   
    $rata2 = $total/count($nilai);
    echo $rata2;
?>
