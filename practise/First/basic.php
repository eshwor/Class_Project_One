<?php
// isset()
$a   ="ram";
if(isset($a))
{
echo $a;
}
else
{
echo "it is not set";	
}

unset($a);
// delete the varible or unset the variable

// empty()
$age  = "10";
if(!empty($age))
{
echo $age;
}
else
{
echo "it is empty";	
}

echo "<hr>";
for($i=1; $i<=10; $i++)
{
   /* if($i%2==0 ) 
	  { echo "<i>$i is even</i><br>";
	  }
	  else
	  {
		  echo "<b>$i is odd</b><br>";
	  }*/
	  
	  echo ($i%2==0) ? "<i>$i is even</i><br>" : "<b>$i is odd</b><br>";
}

?>