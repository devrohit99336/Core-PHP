<?php

class ABC
{
    public function demo(){
        echo "This function belong from ABC class";
    }
}

class XYZ
{
    public function demo2(){
        echo "This function belong from XYZ class ";
    }
}

function Test(XYZ $obj2){
    $obj2->demo2();
}

$obj1 = new ABC();
$obj2 = new XYZ();

Test($obj2);


