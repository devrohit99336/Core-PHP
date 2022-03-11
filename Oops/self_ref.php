<?php
//**========================== Self  Refrencing =============================**//

class DEF {
    public $msg = "Hello i am belong to DEF class";
    public function demo(){
        echo "Hello i am belong to DEF class";
    }
}

class GHI {
    public $DEFobj;
    public function __construct()
    {
        $this->DEFobj = new DEF();
    }

    public function demo2($b){
        $b -> demo();
    }
}

$obj = new GHI();
echo $obj->DEFobj->demo()."\n <br>";

$obj2 = new DEF();
$obj -> demo2($obj2); //pass GHI object in DEF class member function 