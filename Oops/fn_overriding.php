<?php

    class test{

        public function show($a){
            echo "Welcome to parent show function {$a} <br>";
        }
    }

    class childTest extends test
    {

        public function show($a){
            Parent::show("Prem");

            echo "Welcome to child show function {$a}";
        }
    }


    $obj = new childTest();
    $obj->show('Rohit kumar');  

?>