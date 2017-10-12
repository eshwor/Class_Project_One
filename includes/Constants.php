<?php
if($_SERVER['HTTP_HOST']=='localhost' or $_SERVER['HTTP_HOST']=='127.0.0.1')
{
	define("HOST","localhost");
	define("USER","root");
	define("PASS","");
	define("DBNAME","db_php7am");
}
else
{
	define("HOST","livehost");
	define("USER","usernames");
	define("PASS","sdfsdfds");
	define("DBNAME","dsfdsfdsf");
}
// remaining constants here
define("TABLE_STATIC","tbl_static");
define("TABLE_NEWS","tbl_news");
define("TABLE_BANNER","tbl_banner");
define("TABLE_ADVERT","tbl_advert");
?>