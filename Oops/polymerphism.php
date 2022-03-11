<?php

    // Declare Interface
   interface Machine {
       //interface function

      public function calcTask();
   }


   class Circle implements Machine {
      private $radius;
      public function __construct($radius){
         $this -> radius = $radius;
      }
      public function calcTask(){
         return $this -> radius * $this -> radius * pi();
      }
   }

   class Rectangle implements Machine {
      private $width;
      private $height;
      public function __construct($width, $height){
         $this -> width = $width;
         $this -> height = $height;
      }
      public function calcTask(){
         return $this -> width * $this -> height;
      }
   }
   $mycirc = new Circle(3);
   $myrect = new Rectangle(3,4);
   echo "<strong>Inheritance:</strong><p> यह OOPs का एक महत्वपूर्ण feature है जो कि एक class को दूसरी class के features को access करने की facility provide करता है। इसमे एक class का object अन्य class की properties को भी access कर use कर सकता है। यह reuseability के feature को implement करता है जहां किसी class मे नए features कोadd करने के लिए नई class बनाकर उसमें पुरानी class के features को भी implement किया जाता है साथ ही नई class मे और codes भी जोड़ दिये जाते हैं।</p>";
   echo $mycirc->calcTask();
   echo "<br>";
   echo $myrect->calcTask();
?>