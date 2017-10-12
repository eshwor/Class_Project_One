<?php
$age  =  25;
echo "he is $age year old";
echo "<hr>";
echo 'he is $age year old';


echo "<hr>";
$str  =  "holy is comming near. We will play holy in saturday";
echo $str;
echo "<hr>";
echo strtoupper($str);
echo "<hr>";
echo strtolower($str);
echo "<hr>";
echo strlen($str);
echo "<hr>";
echo ucfirst($str);
echo "<hr>";
echo ucwords($str);
echo "<hr>";
echo str_replace("saturday","sunday",$str);
echo "<hr>";
echo strstr($str,"comming");
echo "<hr>";
echo str_repeat(".",100);
echo "<hr>";
echo substr($str,0,10);
echo "<hr>";
echo strpos($str,"We");
?>