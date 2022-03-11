<?php  
        class MyCar
  	{
  		public static $color = 'Green';
        public static $model = 'G3';
  		public static function getCar()
  		{
            print "This is a static function <br>";
  			return self::$color;
  		}
  		/* define one more static function in which we'll access getCar() function*/
  		// public static function getCarInfo()
  		// {
  		// 	return self::getCar();
  		// }
  	}

    class Hundai extends MyCar
    {
        public function getCar2()
  		{
            print "Try to access the static function of parent <br>";
  			echo parent::getCar()."<br>";
            echo parent::$model;
  		}
    }

    $obj = new Hundai();
    $obj->getCar2();
  	//echo MyCar::getCarInfo();
?>