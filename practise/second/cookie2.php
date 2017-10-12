<?php
if(isset($_POST['loginBtn']))
{
      if(isset($_POST['remember']))
	  {
		setcookie("rem_user", $_POST['username'], time()+(60*60));
		setcookie("rem_pass", $_POST['password'], time()+(60*60));		
	  }
	  else
	  {
		 setcookie("rem_user", "", time()-(60*60));
		setcookie("rem_pass", "", time()-(60*60)); 
	  }
}
else
{
// redirect method	
header("Location:cookie1.php");	
}
?>
<a href="cookie1.php">click here</a>