<?php
$a  =  12;

function show()
{ //global $a;
$a  =  $GLOBALS['a'];
return $a;
}

echo show();
?>