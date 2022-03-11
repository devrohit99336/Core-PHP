<?php

    //basic function
    function getData(){
        echo "welcome in my first function in php <br><br>";
    }
    getData();


    //function with parameter/argument
    function name($a,$b){   //parament / formal argument
        echo $a,$b;
    }
    name("my name is rohit and my age is: ",25); //argument /actual argument



    //============================= call by value  =================================//
    print '<br> <h4>Call By Value:</h4> ';

    function callByValue($i){ /// formal argument
        $i++;
        return '<br> call by vlaue : '.$i;
    }

    $a =5;

    echo 'actual value : '.$a;
    echo callByValue($a); //actual argument
    echo '<br> actual value not overwrite : '.$a;


    //============================ call by refrence =================================//
    print '<br> <h4>Call By Refrence:</h4> ';

    function callByRefrence(&$i){ /// formal argument
        $i++;
        return '<br> call by refrence : '.$i;
    }

    $a =5;

    echo 'actual value : '.$a;
    echo callByRefrence($a); //actual argument
    echo '<br> actual value overwrite : '.$a;

?>