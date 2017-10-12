<?php
$action  =  $_GET['action'];
if($action=='edit')
{
	$id  = $_GET['id'];
	$sql = "select * from tbl_user where id='$id'";
	$result =  mysql_query($sql);
	$row  =  mysql_fetch_assoc($result);
}
?>
<form action="page/act_form.php?action=<?php echo $action;?><?php echo ($action=='edit')?"&id=$id":""; ?>" method="post" onSubmit="return checkAdminUser();">
<table  border="0" cellpadding="5" cellspacing="5" class="formDisplayTable" >
  <tr>
    <td colspan="2" class="formHeading"><h2>Admin User <?php echo ($action=='add') ? "Add":"Edit"; ?> Section</h2></td>

  </tr>
  <tr>
    <td width="150">Username</td>
    <td><label>
      <input type="text" name="username" id="username" value="<?php echo $row['username']; ?>" onKeyUp="removeMessage('username');">
	  <span id="usernameErr" class="fieldError"></span>
    </label></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" id="password" value="<?php echo $row['password']; ?>" onKeyUp="removeMessage('password');">
	  <span id="passwordErr" class="fieldError"></span>
	</td>
  </tr>
  <tr>
    <td>Fullname</td>
    <td><input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname']; ?>" onKeyUp="removeMessage('fullname');">
	<span id="fullnameErr" class="fieldError"></span>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="saveBtn" value="Save" >
	  <input type="reset">
	  <input type="button" value="Cancel" onClick="history.back();">
    </td>
  </tr>
</table>




</form>