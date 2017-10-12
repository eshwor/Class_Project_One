<?php
include_once("../includes/application_top.php");
$action =  $_GET['action'];
$id     =  $_GET['id'];
$funObj -> table  =  TABLE_ADMINUSER;

if(isset($_POST['saveBtn']))
{
     $username  =  $_POST['username'];
     $password  =  $_POST['password'];
     $fullname  =  $_POST['fullname'];
	 
$funObj -> data = array("username"=>$username,
	                    "password"=>base64_encode($password),
					    "fullname"=>$fullname
	                    );
	 
	 if($action=='add')
	{ 
	  $nums =  $funObj->checkDublicateUser($username, base64_encode($password));
	   if($nums>0)
	   {
	      $_SESSION['errorMessage'] = "User already exist. try another!!";
	      $funObj->redirect($_SERVER['HTTP_REFERER']);
		  exit;
	   }
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
$url  =  "../index.php?_page=adminUser";
$funObj->redirect($url);
?>