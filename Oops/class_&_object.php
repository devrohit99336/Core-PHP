<?php  
class AC  
{  
    public $a = "Rohit kumar";
    public $speed = 16;
    public $model = "voltas";  
    public function display()  
    {  
        //echo $this->a; 
        echo "this is {$this->a} <br>";
        echo 'this is {$this->a}';
    }  

    public function speedUp(){
        $spd1 = $this->speed+1;
        echo $spd1.'<br>';
    }

    public function speedDown(){
        $spd2 = $this->speed-1;
        echo $spd2;
    }
}  

$obj = new AC();  // declare obj is object of class demo
$obj->display();  // call function using object obj
//$obj->speedUp();
//$obj->speedDown();
?> 
