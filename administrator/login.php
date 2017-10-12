<?php
include_once("includes/application_top.php");
if(isset($_POST['LoginBtn']))
{
    $username  =  $_POST['username']; 
    $password  =  $_POST['password'];   
	
	$funObj->checkLogin($username, $password);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator Login Section - Child  Care Center</title>
<link rel="stylesheet" href="css/login.css" type="text/css"/>
<script language="javascript" src="js/valid.js"></script>
<link rel="shortcut icon" href="../favicon.ico" />
</head>

<body onload="focusMe();">
<div id="siteTitle"><h2>Child  Care Center</h2></div>

<div id="loginDiv">
<form action="" method="post" onsubmit="return checkLogin();">
	  <table cellpadding="1" cellspacing="1" border="0" class="tableLogin">
  <tr>
    <td>Login</td>
	<td><div id="messageDiv">
	<?php
	if(isset($_SESSION['loginError']))
	{
	echo $_SESSION['loginError'];
	unset($_SESSION['loginError']);
	}
	?>
	</div></td>
    </tr>
  <tr>
    <td width="120">Username</td>
    <td><label>
      <input type="text" name="username" id="username" >
    </label>
	</td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" id="password" ></td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="LoginBtn" value="Login">
    </label></td>
  </tr>
</table>
 </form>
</div>

