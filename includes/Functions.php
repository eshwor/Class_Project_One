<?php
include_once("Database.php");
class Functions  extends Database
{
   function check($field)
   {
     $field  =  trim($field); // white space trim garcha
     $field  =  strip_tags($field); // it remove html tags
     $field  =  stripslashes($field); // it remove slashes
     $field  =  mysql_real_escape_string($field);	 // sql injection. it negelects the mysql query strings
	 return $field; 
	
   }
   
   function redirect($url)
   {
     if(headers_sent())
	 {
	   echo "<script>window.location.href='$url'</script>";
	   exit;
	 }
	 else
	 {
	   session_write_close();
	   header("Location:$url");
	   exit;
	 }
	 
   }
   
   // function remaining is listed here
   
   function getStaticContent($id)
   {
   $sql = "select * from ".TABLE_STATIC." where id='$id'";
	$result =  $this->exec($sql);
	return  $this->fetch_assoc($result);
   }
   
   function getLimitedNews($limit)
   {
    $sql = "select * from ".TABLE_NEWS." where status='1' order by id desc limit 0,$limit";
	return   $this->exec($sql);
   }
   function getSelectedNews($id)
   {
   $sql = "select * from ".TABLE_NEWS." where status='1' and id='$id'";
	$result =  $this->exec($sql);
	return  $this->fetch_assoc($result);
   }
   
   function getAllNews()
   { $sql = "select * from ".TABLE_NEWS." where status='1' order by id desc";
   return  $this->listings($sql, "index.php?_page=news" , 4);
   }
  
  function getSelectedBanner($sid)
  {
	 $sql = "select * from ".TABLE_BANNER." where status='1' and static_id='$sid'  order by id desc limit 0,1";
	$result =  $this->exec($sql);
	return  $this->fetch_assoc($result);
  }
  
  // for search 
  function staticPageSearch($searchText)
  {
   $sql = "select * from ".TABLE_STATIC." where 1=1 and (pagename like '%$searchText%'
                                                    ||  pagedesc like '%$searchText%'
													||  pagetitle like '%$searchText%'
													)";
	return $this->exec($sql);
  }
  
  function newsPageSearch($searchText)
  {
   $sql = "select * from ".TABLE_NEWS." where 1=1 and (news_title like '%$searchText%'
                                                    ||  news_desc like '%$searchText%'
													||  news_author like '%$searchText%'
													||  news_date like '%$searchText%'
													)";
	return $this->exec($sql);
  }

}

?>

