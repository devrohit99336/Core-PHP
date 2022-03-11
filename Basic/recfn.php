<?php
    function demo($n){
        //Recursive function means function by self
        if($n<=5)
        {
            echo $n.'<br>' ;
            demo($n+1);
        }
    }
    demo(1);
?>