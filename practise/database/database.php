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

/*$table  =  "CREATE TABLE `tbl_photo`
                (
                  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
                  `name` VARCHAR( 50 ) NOT NULL
                 )";

$result  =   mysql_query($table) or die("Wrong Query<br>".mysql_error());
if($result)
{
echo "table created Successfully<br>";	
}
*/
// Inserting into database
   
//   $insert  =  "INSERT INTO `tbl_user` (`firstname`,`lastname`,`phone`,`location`,`email`) VALUES ('ganesh','thapa','654035878','banepa','ganesh@hotmail.com')";
   $insert  =  "INSERT INTO `tbl_user` SET `firstname`='prem',
                                                                  `lastname`='suwal',
																  `phone`='123456789',
																  `location`='bkt',
																  `email`='prem123@gmail.com'
																  ";

$result  =   mysql_query($insert) or die("Wrong Query<br>".mysql_error());
if($result)
{
echo "Data Inserted Successfully<br>";
header("location:select.php");	
}
?>