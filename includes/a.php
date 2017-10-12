<?php
include_once("application_top.php");

/*echo "<pre>";
print_r($arr);
echo "</pre>";*/

/*$obj-> table =  "tbl_user";
$obj-> data  =  array("username"=>"ganesh",
                      "password"=>"prem",
					  "fullname"=>"ganesh prem"
					  );
$obj->insert();*/	

/*$obj-> table =  "tbl_user";
$obj-> data  =  array("username"=>"rita",
                      "password"=>"rita",
					  "fullname"=>"rita prem"
					  );
					  
$obj-> cond  =  array("username"=>"ganesh",
                      "password"=>"prem"
					  );
					  					  
$obj->update();*/

$funObj-> table =  "tbl_user";
$funObj-> cond  =  array("id"=>35);
					  					  
$funObj->delete();				  

?>