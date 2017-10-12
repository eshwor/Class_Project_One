<?php
require_once("db.php");
$action  =  isset($_GET['action']) ? $_GET['action'] : "add";
if($action=='edit')
{  $id  =  $_GET['id'];
   $sql =  "select tbl_user.*,tbl_user_desc.phone,tbl_user_desc.location from tbl_user, tbl_user_desc where tbl_user.id=tbl_user_desc.user_id and tbl_user.id='$id'";
   $result  =  mysql_query($sql);
   $row  =  mysql_fetch_array($result);   
}
?>
<link rel="stylesheet" href="style.css">
<script language="javascript">
function checkRegister()
{
   if(document.getElementById('username').value=="")
   {
   alert('Please enter the username');
   document.getElementById('username').focus();
   return false;
   }
   else if(document.getElementById('password').value=="")
   {
   alert('Please enter the password');
   document.getElementById('password').focus();
   return false;
   }
   else if(document.getElementById('fullname').value=="")
   {
   alert('Please enter the fullname');
   document.getElementById('fullname').focus();
   return false;
   }
   else if(document.getElementById('phone').value=="")
   {
   alert('Please enter the phone');
   document.getElementById('phone').focus();
   return false;
   }
   else if(document.getElementById('location').value=="")
   {
   alert('Please enter the location');
   document.getElementById('location').focus();
   return false;
   }
   else
   { return true; }
}
</script>
<div id="registerForm">
<form name="form1" method="post" action="act_form.php?action=<?php echo $action; ?><?php echo ($action=='edit') ? "&id=$id":""; ?>" onSubmit="return checkRegister();">
  <fieldset>
    <legend>Register</legend>
    <table width="450" border="0">
    <tr></tr>
    <tr>
      <td>Username</td>
      <td><input type="text" name="username" id="username" value="<?php echo $row['username']; ?>"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="password" id="password" value="<?php echo $row['password']; ?>" ></td>
    </tr>
	
	<tr>
      <td>Fullname</td>
      <td><input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname']; ?>"></td>
    </tr>
		<tr>
      <td>Phone</td>
      <td><input type="text" name="phone" id="phone" value="<?php echo $row['phone']; ?>"></td>
    </tr>
		<tr>
      <td>Location</td>
      <td><input type="text" name="location" id="location" value="<?php echo $row['location']; ?>"></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td> 
      <td><input type="submit" name="saveBtn" id="saveBtn" value="Save">
	  <input type="reset">
	  <input type="button" value="Cancel" onClick="history.go(-1);">
	  </td>
    </tr>
    </table>
  </fieldset>
</form>
</div>
