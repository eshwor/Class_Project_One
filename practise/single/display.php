<?php
session_start();
require_once("db.php");
?>
<div id="messageDiv">
<?php
if(isset($_SESSION['successMessage']))
{
echo $_SESSION['successMessage'];
unset($_SESSION['successMessage']);
}
?>
</div>
<?php
$sql =  "select * from tbl_user order by id desc";
$result  =  mysql_query($sql);
$num   =  mysql_num_rows($result);
?>
<link rel="stylesheet" href="style.css">
<a href="form.php">Add New</a>
<table cellpadding="1" cellspacing="1" border="0" width="500" class="tableDisplay" >
<tr class="tableHead">
<td>Username</td>
<td>Password</td>
<td>Fullname</td>
<td colspan="2">Action</td>
</tr>
<?php
if($num>0)
{  $sn=1;
   while($row   =  mysql_fetch_array($result))
   {
?>
		<tr class="<?php echo ($sn%2==0) ? "even":"odd"; ?>">
		<td><?php echo $row['username']; ?></td>
		<td><?php echo $row['password']; ?></td>
		<td><?php echo $row['fullname']; ?></td>
		<td><a href="form.php?action=edit&id=<?php echo $row['id']; ?>">Edit</a></td>
		<td><a href="act_form.php?action=delete&id=<?php echo $row['id']; ?>" onClick="return confirm('Are you sure you want to delete this data?');">Delete</a></td>
		</tr>
<?php
    $sn++;
   } // while close
} // if close
else
{
echo "<tr><td colspan='3'>No records found</td></tr>";
}   
?>   
</table>