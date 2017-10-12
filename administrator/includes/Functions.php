<?php
include_once("Database.php");
@include_once("../fckeditor/fckeditor.php");
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
   
   function checkLogin($user, $pass)
   {
      $user  =  $this->check($user);
	  $pass  =  base64_encode($this->check($pass));
	  
	
	 
	 $sql = "select * from  ".TABLE_ADMINUSER." where username='$user' and password='$pass'"; 
	 $result  =  $this->exec($sql);
	 $num =   $this->total_rows($result);
	 if($num==1)
	 {
	    $row  =  $this->fetch_array($result);
		$_SESSION['adminUserId'] =  $row['id'];
		$_SESSION['fullname'] =  $row['fullname'];	
		$url  =  "index.php";
	    $this->redirect($url);	
	 }
	 else
	 {
	  $_SESSION['loginError']  =  "Invalid username or password";
	  $url  =  "login.php";
	  $this->redirect($url);
	 }
  }
  
  // for fckeditor
  	function fckEditor($elementName, $elementValue, $fckPath="", $toolbarSet="Default", $fckHeight="200", $fckWidth="100%"){
		
		$oFCKeditor = new FCKeditor($elementName) ;
		$oFCKeditor->BasePath = $fckPath."fckeditor/" ;
		$oFCKeditor->ToolbarSet = $toolbarSet; 
		$oFCKeditor->Value = html_entity_decode($elementValue); 
		$oFCKedtior->Height = $fckHeight;
		$oFCKedtior->Width = $fckWidth;
		return $oFCKeditor->Create() ;
	}
  
  
  function adminUserList()
  {
    $sql =  "select * from ".TABLE_ADMINUSER." order by id desc";
    return $this->exec($sql);
  }
  
  function adminuserListPage()
  {
  
    $sql =  "select * from ".TABLE_ADMINUSER." order by id desc";
    return $this->listings($sql,"index.php?_page=adminUser",5);
  
  }
  
  function adminUserSel($id)
  {
    $sql = "select * from ".TABLE_ADMINUSER." where id='$id'";
	$result =  $this->exec($sql);
	return  $this->fetch_assoc($result);
  }
  
  
  function checkDublicateUser($user, $pass)
  {
    $sql = "select * from ".TABLE_ADMINUSER." where username='$user' and password='$pass'";
	 $result  =  $this->exec($sql);
	 return  $this->total_rows($result);
  }
 
  
  // static page code start
   function staticListPage()
  {
  
    $sql =  "select * from ".TABLE_STATIC." order by id desc";
    return $this->listings($sql,"index.php?_page=static",5);
  
  }
  
  function staticList()
  {  
    $sql =  "select * from ".TABLE_STATIC." order by id desc";
    return $this->exec($sql);
  
  }
  
  function staticSel($id)
  {
    $sql = "select * from ".TABLE_STATIC." where id='$id'";
	$result =  $this->exec($sql);
	return  $this->fetch_assoc($result);
  }
  
   // static page code end
   
    // News page code start
   function newsListPage()
  {
  
    $sql =  "select * from ".TABLE_NEWS." order by id desc";
    return $this->listings($sql,"index.php?_page=news",5);
  
  }
  
  function newsSel($id)
  {
    $sql = "select * from ".TABLE_NEWS." where id='$id'";
	$result =  $this->exec($sql);
	return  $this->fetch_assoc($result);
  }
  
   // Gallery page code start
   function galleryListPage()
  {
  
    $sql =  "select * from ".TABLE_GALLERY." order by id desc";
    return $this->listings($sql,"index.php?_page=gallery",5);
  
  }
  
  function gallerySel($id)
  {
    $sql = "select * from ".TABLE_GALLERY." where id='$id'";
	$result =  $this->exec($sql);
	return  $this->fetch_assoc($result);
  }
  function bannerListPage()
  {
  
    $sql =  "select * from ".TABLE_BANNER." order by id desc";
    return $this->listings($sql,"index.php?_page=banner",5);
  
  }
  
  function bannerSel($id)
  {
    $sql = "select * from ".TABLE_BANNER." where id='$id'";
	$result =  $this->exec($sql);
	return  $this->fetch_assoc($result);
  }
function advertismentListPage()
  {
  
    $sql =  "select * from ".TABLE_ADVERTISMENT." order by id desc";
    return $this->listings($sql,"index.php?_page=advertisment",5);
  
  }
  
  function advertismentSel($id)
  {
    $sql = "select * from ".TABLE_ADVERTISMENT." where id='$id'";
	$result =  $this->exec($sql);
	return  $this->fetch_assoc($result);
  }
  function imageListPage()
  {
  
    $sql =  "select * from ".TABLE_IMAGE." order by id desc";
    return $this->listings($sql,"index.php?_page=image",5);
  
  }
  
  function imageSel($id)
  {
    $sql = "select * from ".TABLE_IMAGE." where id='$id'";
	$result =  $this->exec($sql);
	return  $this->fetch_assoc($result);
  }
  }
?>

