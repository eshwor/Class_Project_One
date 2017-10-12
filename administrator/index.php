<?php
include_once("includes/application_top.php");
$contentPage  =  isset($_GET['_page']) ?  $_GET['_page'] : "home";
if(!isset($_SESSION['adminUserId']))
{
$url  =  "login.php";
//$funObj->redirect($url);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator - Child Care Center</title>
<link rel="stylesheet" href="css/main.css" type="text/css"/>
<script language="javascript" src="js/valid.js"></script>
<!--changed for calender -->
    <link rel="stylesheet" type="text/css" href="../calender/JSCal2/css/jscal2.css" />
    <link rel="stylesheet" type="text/css" href="../calender/JSCal2/css/border-radius.css" />
    <link rel="stylesheet" type="text/css" href="../calender/JSCal2/css/gold/gold.css" />
    <script type="text/javascript" src="../calender/JSCal2/js/jscal2.js"></script>
    <script type="text/javascript" src="../calender/JSCal2/js/lang/en.js"></script>
     <!--changed for calender -->
	 
<!-- for lytebox-->	
  <link rel="stylesheet" type="text/css" href="../lytebox/lytebox.css" />
    <script type="text/javascript" src="../lytebox/lytebox.js"></script> 
<!-- for lytebox end-->		 
	 
	 

<link rel="shortcut icon" href="../favicon.ico" />
</head>

<body>
 
 <div id="wrapper">
    <div id="header">
	<div id="menu_top">
	<a href="index.php">Home</a> | 	<a href="logout.php">Log out</a>
	</div>
	<h2>Child Care Center Admin Panel</h2>
	<p>Iswhor, Ram Prasad, Navaraj, Ram Chandra<p>
    </div>
	
	<div id="menu">
	<?php include_once("includes/menu.php"); ?>
    </div>
	
	<div id="content">
	<?php include_once("page/$contentPage.php"); ?>
    </div>
	
	<div id="footer">
	&copy; 2011 Child care center nepal
    </div>
 
 
 </div>


