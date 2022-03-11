<?php

class BaseClass{
    protected static $name = "demo";
    public function show() {
        echo self::$name."<br/>"; //call self variable $name with
        echo static::$name; // call static value means run time entity using static 
    }
}

class derived extends BaseClass{
    protected static $name = "rohit kumar";
}

$object = new derived;
$object->show();

?>