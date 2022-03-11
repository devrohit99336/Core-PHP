<?php

class TV
{
    public $model = '';
    public $size = '';

    public function Display()
    {
        echo "TV model: {$this->model} and size is: {$this->size}. <br>";
        //var_dump($this);   //print object variables with parameter values
    }

    function __construct($a,$b)
    {
        $this->model = $a;
        $this->size = $b;
        echo "This is parent cunstructor <br>";
        //$this->Display();
    }
}

class SmartTV extends TV
{
    public function message($speed,$model) {
        echo "Am I a smart tv or normal tv? <br>";
        //  Call protected method from within derived class - OK
        //  $this -> Display();  //call parent class member function
        //  TV::__construct($speed,$model);  // call parent cunstructor
        //  $this -> Display();

        parent::Display();
    }
 
    function __construct($j,$k)
    {
        echo "This is child cunstructor <br>";
        TV::__construct($j,$k);
        //  $this -> Display();  //call parent class member function
        parent::Display();   //call parent class function using scope resolution operator

    }
     
}

$obj = new SmartTV('LG','58');
$obj->message('LG','G5');

?>