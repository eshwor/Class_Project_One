<?php
include_once("includes/application_top.php");
unset($_SESSION['adminUserId']);
unset($_SESSION['fullname']);
$url  =  "index.php";
$funObj->redirect($url);
?>