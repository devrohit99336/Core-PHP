<?php

trait t1{
    public function Test()
    {
        echo "Test method from t1 trait <br>";
    }
}

trait t2{
    public function Test()
    {
        echo "Test method from t2 trait <br>";
    }
}

class demo
{
    use t1,t2{
        t1::Test insteadof t2;
        t2::Test as rohit;
    }
}

$obj = new demo();
$obj->Test();
$obj->rohit();
?>