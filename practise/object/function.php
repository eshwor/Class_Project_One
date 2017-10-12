<?php
function add($a, $b)
{
  return $a+$b;
}

function add1($a, $b)
{
  echo $a+$b;
} 

function add2( $a = 5,$b = 6 )
{
echo $a + $b;
}

echo add(10,20);
echo "<hr>";
add1(30,40);
echo "<hr>";
add2();

?>