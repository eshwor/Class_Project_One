<?php
$result   =  $funObj -> adminUserList();
$num  =  $funObj     -> total_rows($result);
?>
<table width="700" cellpadding="1" cellspacing="1" border="0">
  <tr>
    <td colspan="5"><h2>Admin User Management Section </h2></td>
  </tr>
  <tr>
    <td colspan="3" align="left">
	<?php
	if(isset($_SESSION['successMessage']))
	{
	echo $_SESSION['successMessage'];
	unset($_SESSION['successMessage']);
	}
	?>
	</td>
    <td colspan="2" align="right">
	<a href="index.php?_page=add_edit_adminuser&action=add" title="Add">
	<img src="images/add-new.png" title="Add" alt="a" border="0"></a>
	</td>
  </tr>
  </table>
  
  <br />
  
  <table width="700" cellpadding="1" cellspacing="1" border="0" class="tableDisplay">
  
  <tr class="tableHead">
    <th>Username</th>
    <th>Password</th>
    <th>Fullname</th>
    <th colspan="2">Action</th>
  </tr>
<?Php
if($num>0)
{  
   $sn=1;
   while($row  =  $funObj -> fetch_assoc($result))
   {
?>

  <tr class="<?php echo ($sn%2==0) ? "even":"odd"; ?>" >
    <td><?Php  echo $row['username'];?></td>
    <td><?Php  echo base64_decode($row['password']);?></td>
     <td><?Php  echo $row['fullname'];?></td>
    <td><a href="index.php?_page=add_edit_adminuser&action=edit&id=<?php echo $row['id']; ?>" title="Edit"><img src="images/edit.gif" border="0" title="Edit" alt="Edit" /></a></td>
    <td><a href="page/act_form.php?action=delete&id=<?php echo $row['id']; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this data');"><img src="images/delete.png" border="0" title="Delete" alt="Delete" /></a></td>
  </tr>
  
  <?Php
  $sn++;
  }
}
else
{  
  ?>
  <tr>
    <td colspan="5">No Records Found!!</td>
  </tr>
<?Php
}
?>  
</table>
