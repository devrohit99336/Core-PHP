<?php

class ACC
{
    public $size = '32';
    private $type = 'LCD';
    protected $model = 'SANSUI';

    //Accessor (Gettor) function
    public function getdata(){
        print "<h3>Accessor(Gettor) function :</h3>";
        echo "Model: {$this->model} <br> Size: {$this->size}<br>Type: {$this->type}<br> Return value : ";
        return  $this->type;
    }

    //Settor function setdata
    public function setdata($a,$b,$c){
        $this->model = $a;
        $this->size = $b;
        $this->type = $c;
        print "<h3>Mutetor(Settor) function :</h3>";
        echo "Model: {$this->model} <br> Size: {$this->size}<br>Type: {$this->type}<br>";
    }
} 

class SmartACC extends ACC
{
    public function message(){
        print "<br><h2>Call Parent class settor function:</h2>";
        parent::setdata('INTEX','58','LED');
    }
      
}

$obj = new SmartACC();
//  echo $obj->model;   //Cannot call model because this is protected property
//  echo $obj->type;    //Cannot access and call type because this is private property
//  echo $obj->size;    //Easily accessable because this is public property
echo $obj->getdata();   //all variable accesable and getaded througth accessor function (getdata)

$obj->setdata('SUMSUNG','60','LED'); //
$obj->message();
