<?php
    $cars = array("Hundai","Rangrover","Volvo","Bolero");
    //sort($cars);  //sort array values according to asending order
    rsort($cars);  //sort array values according to desending order
    $arlength = count($cars);

    for($i=0;$i<$arlength;$i++){
        echo $cars[$i];
        echo "<br>";
    }
?>