<?php  


//refrence by => https://www.php.net/manual/en/language.oop5.decon.php
class SPAC  
{  
    public $a = "Rohit kumar";
    public $speed = 16;
    public $model = "voltas";  
    public function display()  
    {  
        echo "this is {$this->a} <br>";
        //echo 'this is {$this->a}';
    }  

    //===================== Cunstructor function ===================//
    function __construct($speed,$model)
    {
        echo "hello evryone welcome to my chanle <br>";
        $this->speed = $speed;
        $this->model = $model;
    }

}  

$obj = new SPAC(18,"LG");  // declare obj is object of class demo
//$obj->display();  // call function using object obj
echo $obj->speed.'<br>';
echo $obj->model;
?> 
