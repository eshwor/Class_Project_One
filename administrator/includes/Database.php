<?php
include_once("Constants.php");
include_once("class.paging.php");
class Database
{
  var $con;
  
  public function connect_db()
  {
    $this->con  =  mysql_connect(HOST,USER,PASS) or die("Failed connectiong to mysql server<br>".mysql_error());
	mysql_select_db(DBNAME) or  die("Failed connectiong to Database<br>".mysql_error());
	return $this->con;
  }
  
  function exec($sql)
  {
    $result  =   mysql_query($sql) or die("Wrong Query<br>".mysql_error());
	if($result)
	{  return $result;
	}
	else
	{
	return NULL;
	}
  }
  
  function total_rows($result)
  {
   return mysql_num_rows($result);
  }
  
  function fetch_array($result)
  {
    return mysql_fetch_array($result);
  }
  
  function fetch_assoc($result)
  {
    return mysql_fetch_assoc($result);
  }
  function fetch_object($result)
  {
    return mysql_fetch_object($result);
  }
  
  function rows_id()
  {
  return mysql_insert_id();
  }
  
  
  function insert()
  {
     $query  =  "INSERT INTO `$this->table` SET ";
	foreach($this->data as $key=>$val)
	{
	   $arr[$key] =  "`$key`='$val'";
	}
	
	if(count($arr)>0)
	{
	$query  .= implode(" , ", $arr);
	}
	else
	{
		echo "Wrong Query<br>";
		exit;
	}	
	//echo $query; die();
	return $this->exec($query);	
  }
  
  function update()
  {
    $query  =  "UPDATE `$this->table` SET ";
	foreach($this->data as $key=>$val)
	{
	   $arr[$key] =  "`$key`='$val'";
	}
	
	if(count($arr)>0)
	{
	$query  .= implode(" , ", $arr);
	}
	else
	{
		echo "Wrong Query<br>";
		exit;
	}	
	
	foreach($this->cond as $k=>$v)
	{
	   $ar[$k] =  "`$k`='$v'";
	}
	
	if(count($ar)>0)
	{
	$query  .= " WHERE ". implode(" and ", $ar);
	}
	else
	{
		echo "Wrong Query<br>";
		exit;
	}	
	
	//echo $query; die();
	return $this->exec($query);	
  }
  
   function delete()
  {
    $query  =  "DELETE FROM `$this->table` ";
		
	foreach($this->cond as $k=>$v)
	{
	   $ar[$k] =  "`$k`='$v'";
	}
	
	if(count($ar)>0)
	{
	$query  .= " WHERE ". implode(" and ", $ar);
	}
	else
	{
		echo "Wrong Query<br>";
		exit;
	}	
	//echo $query; die();
	return $this->exec($query);	
  }
  
  // other database related query can be listed here
  
  public function listings($sql, $path, $plimit=10000, $seo=0, $debug=false) { 
	
		if($debug){
			die($sql);
		}
		else{
			$pagelist=$sql;
			$pageid =1;	// Get the pid value 	
			if(isset($_REQUEST['np'])) $pageid = $_REQUEST['np'];
			$Paging = new paging($seo);
			$Paging->conObj = $this->obj=new Database;
			$records = $Paging->myRecordCount($pagelist); // count records
			$totalpage = $Paging->processPaging($plimit,$pageid);
			$resultlist = $Paging->startPaging($pagelist); // get records in the databse
			$links = $Paging->pageLinks($path.(isset($queryString)?"?".$queryString:"")); // 1234 links
			unset($Paging);
			
			$pagingValue = array($records,$resultlist,$links);
			return $pagingValue; 
		}
	}
  
}
?>	