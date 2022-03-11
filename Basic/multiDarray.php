<?php
    $emp = array(
        array('1','ajay','20000'),
        array('2','demo1','20000'),
        array('3','demo2','20000'),
        array('4','demo3','20000'),
    );

    //echo $emp;
    //print_r($emp);
    for($row=0;$row<4;$row++){
        echo '<br>';
        for($col=0;$col<3;$col++){
            echo $emp[$row][$col];
        }
        echo '<br>';
    }
?>