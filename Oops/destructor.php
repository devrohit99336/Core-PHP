<?php

//refrence by => https://www.php.net/manual/en/language.oop5.decon.php
 
class MyDestructableClass 
{

    function __destruct() {
        print "Destroying " . __CLASS__ . "<br>";
    }

    function __construct() {
        print "In constructor <br>";
    }
 
    public function message(){
        echo "message for clients <br>";
    }
}

$obj = new MyDestructableClass();
$obj->message();

?>