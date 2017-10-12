<?php
$str  =  "Today we are learning array and array types, array functions";

$arr   =  explode(" ", $str);
echo "<pre>";
print_r($arr);
echo "</pre>";

echo implode(" ", $arr);

?>
