<?php

namespace MynameSpace ;
	class xyz
    {
        public function __construct()
        {
            echo "<b>Parent NameSpace</b><br>";
            echo "welcome in Parent namespace <br> \n";
        }

        public function test(){
            echo "This is from xyz class and Parent namespace function <br> \n";
        }

        public function fnForsubnamespace(){
            echo "This function from parent Namespace <br><br> \n";
        }
    }

    $obj=new xyz();
    // $obj->test();
