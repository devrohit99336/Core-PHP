<?php

namespace MySubNameSpace;

require "nameSpaceFIle.php";
class abc
{
    public function __construct()
    {
        echo "<b>SubNameSpace</b><br>";
        echo "welcome in Subnamespace <br> \n";
    }

    public function test2()
    {
        echo "This function from Subnamespace <br> \n";
    }
}

$obj->fnForsubnamespace();
$obj2 = new abc();
$obj2->test2();
