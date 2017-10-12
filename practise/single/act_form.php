<?php
session_start();
require_once("db.php");
$action  =  $_GET['action'];
$id  =  $_GET['id'];

if(isset($_POST['saveBtn']))
{
   $username  =  $_POST['username'];
   $password  =  $_POST['password'];
   $fullname  =  $_POST['fullname'];
   
    
	if($action=='add')
	{
	   $sql  =  "INSERT INTO `tbl_user` SET `username`='$username',
                                            `password`='$password',
											`fullname`='$fullname'
											";

		$result  =   mysql_query($sql) or die("Wrong Query<br>".mysql_error());
		if($result)
		{
		$_SESSION['successMessage'] =  "Data Inserted Successfully<br>";
		}
	}	
	
	if($action=='edit')
	{
	   $sql  =  "UPDATE `tbl_user` SET      `username`='$username',
                                            `password`='$password',
											`fullname`='$fullname'
											where id='$id'
											";

		$result  =   mysql_query($sql) or die("Wrong Query<br>".mysql_error());
		if($result)
		{
		$_SESSION['successMessage'] =  "Data Edited Successfully<br>";
		}
	}	
   
}
else
{
       if($action=='delete')
	   {
	   
		   $sql  =  "DELETE FROM `tbl_user` where id='$id'";	
			$result  =   mysql_query($sql) or die("Wrong Query<br>".mysql_error());
			if($result)
			{
			$_SESSION['successMessage'] =  "Data Deleted Successfully<br>";
			}	   
	   
	   }
}

header("location:display.php");	

?>