<?php
// server connection
// localhost  ,   127.0.0.1   , $_SERVER['HTTP_HOST']  
$con   =   mysql_connect( "localhost","root","" ) or die("Failed connecting to mysql server<br>". mysql_error() ); 
if($con)
{
//echo "Server connected Successfully<br>";	
}

$seldb  =  mysql_select_db("db_php7am") or die("Failed connecting to database<br>". mysql_error() ); 
if($seldb)
{
//echo "Database Connected Successfully<br>";	
}
?>