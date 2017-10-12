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
   $phone  =  $_POST['phone'];
   $location  =  $_POST['location'];
   
    
	if($action=='add')
	{
	   $sql  =  "INSERT INTO `tbl_user` SET `username`='$username',
                                            `password`='$password',
											`fullname`='$fullname'
											";

		$result  =   mysql_query($sql) or die("Wrong Query<br>".mysql_error());
		
		$user_id   =  mysql_insert_id();
		
		$sql1  =  "INSERT INTO `tbl_user_desc` SET `user_id`='$user_id',
                                            `phone`='$phone',
											`location`='$location'
											";

		$result1  =   mysql_query($sql1) or die("Wrong Query<br>".mysql_error());
		
		
		if($result1)
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
		
		$sql1  =  "UPDATE `tbl_user_desc` SET      `phone`='$phone',
                                            `location`='$location'
											where user_id='$id'
											";

		$result1  =   mysql_query($sql1) or die("Wrong Query<br>".mysql_error());
		
		if($result1)
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
			
			$sql1  =  "DELETE FROM `tbl_user_desc` where user_id='$id'";	
			$result1  =   mysql_query($sql1) or die("Wrong Query<br>".mysql_error());
			if($result1)
			{
			$_SESSION['successMessage'] =  "Data Deleted Successfully<br>";
			}	   
	   
	   }
}

header("location:display.php");	

?>