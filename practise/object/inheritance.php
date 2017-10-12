<?php
class Volume
{
   public $length;
   public $breadth;
   public $height;
   
   
   public function setData($a, $b, $c)
   
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


class Area extends Volume
{
   function calculateArea()
   {
     return ( $this -> length * $this -> breadth);
   }
}

$areaObject  =  new Area;
$areaObject->setData(10,20,30);
echo "Volume of the Cuboid is : ".$areaObject -> calculateVolume();
echo "<hr>";
echo "Area of the Cuboid is : ".$areaObject -> calculateArea();


?>