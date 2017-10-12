<?php
include_once("../includes/application_top.php");
$action =  $_GET['action'];
$id     =  $_GET['id'];
$funObj -> table  =  TABLE_NEWS;

if(isset($_POST['saveBtn']))
{
     foreach($_POST as $key=>$val)
	 {  $$key = $funObj->check($val); }	 	 
		 
		 
  $news_desc   =  mysql_real_escape_string( stripcslashes(trim($_POST['news_desc'])));		 
$funObj -> data = array("news_title"=>$news_title,
	                    "news_author"=>$news_author,
						"news_desc"=>$news_desc,
	                    "news_date"=>$news_date,
						"status"=>$status
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
$url  =  "../index.php?_page=news";
$funObj->redirect($url);
?>