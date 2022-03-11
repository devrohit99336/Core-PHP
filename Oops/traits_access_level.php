<?php

trait t1{
    private function show()
    {
        echo "show method is private from t1 trait";
    }
}


class demo
{
    use t1{
        t1::show as public;
    }
}

$obj = new demo();
$obj->show();
?>