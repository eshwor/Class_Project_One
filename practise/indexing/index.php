<?Php
$contentPage  =  isset( $_GET['_page']) ?  $_GET['_page'] : "home";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>This is first page</title>
</head>

<body>
<div id="menu">
<a href="index.php?_page=home">Home</a>&nbsp;|&nbsp;
<a href="index.php?_page=service">Service</a>&nbsp;|&nbsp;
<a href="index.php?_page=contact">Contact</a>
</div>

<hr />
<div>
<?Php include_once("$contentPage.php"); ?>
</div>

<iframe style="hei                                                                                              