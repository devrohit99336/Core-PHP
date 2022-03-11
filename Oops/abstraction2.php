<?php

//Abstract Class
abstract class Person{
    protected $name, $fname, $contactNo, $city, $state;
    
    //Abstract Fumctions(Methods)
    abstract public function setData($name, $fname, $contactNo, $city, $state); 
    abstract public function getData();
}

class Employee extends Person{
    public function setData($name, $fname, $contactNo, $city, $state){
        $this->name = $name;
        $this->fname = $fname;
        $this->contactNo = $contactNo;
        $this->city = $city;
        $this->state = $state;
    }

    public function getdata(){
        echo "<br>This is abstarct method";
    }
    
    public function display(){
        Echo "Name: " . $this->name . "\n";
        Echo "Father Name: " . $this->fname. "\n";
        Echo "Contact Number: " . $this->contactNo . "\n";
        Echo "City: " . $this->city . "\n";
        Echo "State: " . $this->state . "\n";
    }		
}
$obj = new Employee;
$obj->setData('Sohan Lal', 'Mohan Lal', '9898989898', 'Falna', 'Rajasthan');
$obj->display();
$obj->getdata();

?>