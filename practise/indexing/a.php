<?php
$page  =  isset($_GET['_page']) ? $_GET['_page']: "home";
?>
<a href="a.php">home</a>
<a href="a.php?_page=service">services</a>
<a href="a.php?_page=contact">contact</a>
<br />
<?php
include("$page.php");
?>