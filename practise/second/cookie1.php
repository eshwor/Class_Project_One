<form name="form1" method="post" action="cookie2.php">
  <fieldset>
    <legend>Login</legend>
    <table width="450" border="0">
    <tr></tr>
    <tr>
      <td>Username</td>
      <td><input type="text" name="username" id="username" value="<?php
	  if(isset($_COOKIE['rem_user']))
	  {
		echo $_COOKIE['rem_user'];  
	  }
	  ?>"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="password" id="password" value="<?php
	  if(isset($_COOKIE['rem_pass']))
	  {
		echo $_COOKIE['rem_pass'];  
	  }
	  ?>"></td>
    </tr>
    <tr>
      <td>Remember</td>
      <td><input type="checkbox" name="remember" id="checkbox" <?php
	  if(isset($_COOKIE['rem_pass']))
	  {
		echo "checked";  
	  }
	  ?>></td>
    </tr>
    <tr>
      <td>&nbsp;</td> 
      <td><input type="submit" name="loginBtn" id="button" value="Save"></td>
    </tr>
    </table>
  </fieldset>
</form>
