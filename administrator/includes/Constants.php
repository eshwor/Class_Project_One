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
define("TABLE_ADMINUSER","tbl_user");
define("TABLE_STATIC","tbl_static");
define("TABLE_NEWS","tbl_news");
define("TABLE_GALLERY","tbl_gallery");
define("TABLE_IMAGE","tbl_image");
define("TABLE_BANNER","tbl_banner");
define("TABLE_ADVERTISMENT","tbl_advert");



?>