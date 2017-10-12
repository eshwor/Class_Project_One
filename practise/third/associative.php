<?php
$assoc    =  array("name"=>"ram",
				            "age"=>25,
							"gender"=>"male"
							);

echo "<pre>";
print_r($assoc);
echo "<pre>";

echo count($assoc);

foreach($assoc as $key=>$val)
{
echo $val."<br>";	
}
?>