<?php
$mul  =  array("name"=> array("ram","sita","laxman"),
						"age"=>array(20,18,17),
						"gender"=>array("male","female","male")
						);

echo "<pre>";
print_r($mul);
echo "</pre>";

echo $mul['name'][0];

//unset( $mul['name'][0] );

echo "<pre>";
print_r($mul);
echo "</pre>";

foreach($mul as $key=>$val)
{
echo "<hr>Main key = ". $key."<br>";
   foreach($val as $k=> $v )
   {
	   echo "key = ". $k. "<br>";
	   echo "value =". $v. "<br>";
   }
}
?>