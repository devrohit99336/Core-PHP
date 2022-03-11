<?php

use function PHPSTORM_META\type;

class Test{
    public function __construct()
    {
        echo "<h3>Implement function overloading </h3><br>";
    }

    public function __call($name, $arguments)
    {
        if($name == "overload"){
            $count = count($arguments);
            echo $count .'  ';

            switch($count){
                case "1":
                    echo "One Argument <br>";
                    break;
                case "2":
                    echo "two Argument <br>";
                    break;
                case "3":
                    echo "three Argument <br>";
                    break;
                default:
                    echo "You have enterd envailid value. <br>";
                    break;
            }
        }
    }
}

$obj = new Test();
//$obj->overload("rohit kumar");
//$obj->overload("rohit kumar",25);
$obj->overload("rohit kumar",'26.06.1996',25);

?>