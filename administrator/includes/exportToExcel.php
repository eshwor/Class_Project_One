<?php
include_once("Constants.php");
mysql_connect(HOST,USER,PASS);
mysql_select_db(DBNAME);
if($_GET['data']=="adminUser")
{     
adminUserList(TABLE_ADMINUSER);
}


function adminUserList($tableName=null)
{	
	$line1 = "Username".",";
	$line1 .= "Password".",";
	$line1 .= "Fullname".",";
	
		
	$line2 = trim($line1)."\n";
	
	  $select = "SELECT  * FROM ".$tableName."  order by id desc"; 
      $recordStart       =      mysql_query($select);
	 while($row = mysql_fetch_array($recordStart)) {
				
			$value = "\"".$row['username']."\",";
			$value .= "\"".base64_decode($row['password'])."\",";
			$value .= "\"".$row['fullname']."\",";
			if(strlen(trim($value))>0)		
			$data .= trim($value)."\n";
	}
	
    $finalData = trim($line2.$data);
	
	header("Content-type: application/x-msdownload");
	header("Content-Disposition: attachment; filename=php7am".date('Y-m-d').".csv");
	print $finalData; 
 } 
 
 
 if($_GET['data']=="news")
{     
newsList(TABLE_NEWS);
}


function newsList($tableName=null)
{	
	$line1 = "News Title".",";
	$line1 .= "News Description".",";
	$line1 .= "Author".",";
	$line1 .= "Added Date".",";
	
		
	$line2 = trim($line1)."\n";
	
	  $select = "SELECT  * FROM ".$tableName."  order by id desc"; 
      $recordStart       =      mysql_query($select);
	 while($row = mysql_fetch_array($recordStart)) {
				
			$value = "\"".$row['news_title']."\",";
			$value .= "\"".strip_tags( html_entity_decode( $row['news_desc']))."\",";
			$value .= "\"".$row['news_author']."\",";
			$value .= "\"".$row['news_date']."\",";
			if(strlen(trim($value))>0)		
			$data .= trim($value)."\n";
	}
	
    $finalData = trim($line2.$data);
	
	header("Content-type: application/x-msdownload");
	header("Content-Disposition: attachment; filename=php7am".date('Y-m-d').".csv");
	print $finalData; 
 } 
 


 ?>