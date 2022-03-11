<?php
    $arr = array('1','2','3',4,'5');
    echo " Display array values Using foreach loop:<br>";
    foreach($arr as $i => $item){
        echo $item.'<br>';
    }

    echo "<br><br> Display array values Using for loop and help of count(length): <br>";

    for($a=0;$a<count($arr);$a++){
        echo $arr[$a].'<br>';
    }
?>