<?php
// constant is a data holder which values is fixed once it is set
define("NAME","<b>Ram</b>");
echo NAME;

echo "<hr>";

define("AGE_ADDRESS","20 Banepa",true);
echo AGE_ADDRESS;
echo age_ADDreSS;


if(defined("NAME"))
{
echo "It is Defined and its value is = ".NAME;	
}
?>