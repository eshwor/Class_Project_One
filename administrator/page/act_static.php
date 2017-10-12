<?php
include_once("../includes/application_top.php");
$action =  $_GET['action'];
$id     =  $_GET['id'];
$funObj -> table  =  TABLE_STATIC;

if(isset($_POST['saveBtn']))
{
     foreach($_POST as $key=>$val)
	 {  $$key = $funObj->check($val); }	 	 
		 
		 
  $pagedesc   =  mysql_real_escape_string( stripcslashes(trim($_POST['pagedesc'])));		 
$funObj -> data = array("pagename"=>$pagename,
	                    "pagetitle"=>$pagetitle,
						"pagedesc"=>$pagedesc,
	                    "metaname"=>$metaname,
						"metadesc"=>$metadesc,
	                    "metakeyword"=>$metakeyword
	                    ); 	 	 	 	 	 
	 
	 if($action=='add')
	{ 
	   $funObj ->insert();
	   $_SESSION['successMessage'] = "Data has been added Successfully!!";
	}	
	
	 if($action=='edit')
	{  $funObj ->cond  = array("id"=>$id);
	   $funObj ->update();
	   $_SESSION['successMessage'] = "Data has been updated Successfully!!";
	   
	}	  	 
}
else
{
    if($action=='delete')
	{  $funObj ->cond  = array("id"=>$id);
	   $funObj ->delete();
	   $_SESSION['successMessage'] = "Data has been deleted Successfully!!";
	}	
}
$url  =  "../index.php?_page=static";
$funObj->redirect($url);
?>