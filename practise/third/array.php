<?php
/*
Array is a collection of similar types of data items.
1. enumerative array or numeric or index array
2. Associative array
3. Multidimensional array
*/

/*$index   =  array(); // empty array
$index[]  =  "ram";
$index[]  =  25;
$index[]   =  "male";*/

$index  =  array("ram",25,"male","teacher","TEACHER","BALL","Teacher",50,"1","24");

// array in printable form
//print_r($index);


echo "<pre>";
print_r($index);
echo "</pre>";

//echo $index[1];

echo count($index);
echo "<hr>";
echo sizeof($index);

/*unset($index[0]);
echo "<pre>";
print_r($index);
echo "</pre>";*/

/*unset($index);
echo "<pre>";
print_r($index);
echo "</pre>";*/

echo "<hr>";
list($a, $c, $b) =  $index;
echo $c;

echo "<hr>";

// accessing array value
foreach($index as $key=>$val)
{
echo " key  = ".$key."<br>";
echo " value   = ".$val."<hr>";
}

// sorting

// alphabetical sorting in acending order
/*sort($index);
echo "<pre>";
print_r($index);
echo "</pre>";*/

// alphabetical sorting in descending order
/*rsort($index);
echo "<pre>";
print_r($index);
echo "</pre>";*/

// sorting in ascending order with maintaining key 
/*asort($index);
echo "<pre>";
print_r($index);
echo "</pre>";*/

// sorting in decending order with maintaining key

/*arsort($index);
echo "<pre>";
print_r($index);
echo "</pre>";*/


?>