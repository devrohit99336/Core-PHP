<?php

interface compInterface
{
   public function dispDepaName();
}

interface branch
{
   public function branchName();
}

//single inheritance
class salesDepa implements compInterface
{
       public function dispDepaName()
       {
            echo "Sale Department<br />";
       }
       //Other methods
}

//multipale inheritance
class MarketingDepa implements compInterface,branch   
{
     public function dispDepaName()
     {
           echo "Marketing Department<br>";
     }

     public function branchName()
     {
           echo "Saja branch";
     }
}

$obj1 = new salesDepa;
$obj2 = new MarketingDepa;

$obj1->dispDepaName();
$obj2->dispDepaName();
$obj2->branchName();

?> 