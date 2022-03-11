<?php

namespace abc {
    class xyz
    {
        public function __construct()
        {
            echo "welcome in abc namespace <br>";
        }

        public function test()
        {
            echo "This is xyz class and abc namespace function <br>";
        }
    }

    // $obj=new xyz();
}

namespace {
    class xyz
    {
        public function __construct()
        {
            echo "welcome in globle namespace <br>";
        }

        public function test()
        {
            echo "This is xyz class and globle namespace function <br>";
        }
    }

    $obj = new xyz();               // call self class
    $obj2 = new abc\xyz();           // call abc namespace class
    $obj2->test();
}
