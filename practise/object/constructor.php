<?php
class Volume
{
   private $length;
   private $breadth;
   public $height;
   
   
   //public function Volume($a, $b, $c)
   public function __construct($a, $b, $c)
   {
      $this -> length  = $a;
      $this -> breadth = $b;
      $this -> height  = $c; 
   }
   
   function calculateVolume()
   {
   return ( $this -> length * $this -> breadth * $this -> height );
   }
}

$volObj   =  new Volume(10,20,30);
echo "Volume of the Cube is = ".$volObj ->calculateVolume();


//echo $volObj->height;
?>