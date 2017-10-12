<?php
// server connection
// localhost  ,   127.0.0.1   , $_SERVER['HTTP_HOST']  
$con   =   mysql_connect( "localhost","root","" ) or die("Failed connecting to mysql server<br>". mysql_error() ); 
if($con)
{
echo "Server connected Successfully<br>";	
}

$seldb  =  mysql_select_db("db_php7am") or die("Failed connecting to database<br>". mysql_error() ); 
if($seldb)
{
echo "Database Connected Successfully<br>";	
}

$update   =  "UPDATE `tbl_user` SET         `firstname`='suresh',
                                                                  `lastname`='konda',
																  `phone`='9854678',
																  `location`='bkt',
																  `email`='r123@gmail.com'
																where id='5'
																  ";
	/*
	where id='3'  
	where id='4'  or id='5'
	where firstname='reena'
	where firstname='radha' and lastname='suwal'
	where firstname like 'r%'
	where firstname like '_o%'
	where id in(1,2,3,4)
	where id not in(1,2,3,4)
	where id between 3 and 7

	
	
	*/
$result  =   mysql_query($update) or die("Wrong Query<br>".mysql_error());
if($result)
{
echo "Data Updated Successfully<br>";	
}																  