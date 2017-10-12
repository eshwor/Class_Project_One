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
//$sql =  "select * from tbl_user order by id desc";

//$sql =  "select tbl_user.id,tbl_user.username, tbl_user.password,tbl_user.fullname,tbl_user_desc.phone,tbl_user_desc.location from tbl_user, tbl_user_desc where tbl_user.id=tbl_user_desc.user_id order by tbl_user.id desc";

//$sql =  "select tbl_user.*,tbl_user_desc.phone,tbl_user_desc.location from tbl_user, tbl_user_desc where tbl_user.id=tbl_user_desc.user_id order by tbl_user.id desc";

//$sql =  "select t1.*,t2.phone,t2.location from tbl_user t1, tbl_user_desc as t2 where t1.id=t2.user_id order by t1.id desc";

//$sql =  "select tbl_user.*,tbl_user_desc.phone,tbl_user_desc.location from tbl_user inner join  tbl_user_desc on tbl_user.id=tbl_user_desc.user_id order by tbl_user.id desc";

//$sql =  "select tbl_user.*,tbl_user_desc.phone,tbl_user_desc.location from tbl_user left join  tbl_user_desc on tbl_user.id=tbl_user_desc.user_id order by tbl_user.id desc";


//$sql =  "select tbl_user.*,tbl_user_desc.phone,tbl_user_desc.location from tbl_user right join  tbl_user_desc on tbl_user.id=tbl_user_desc.user_id order by tbl_user.id desc";

$sql =  "select tbl_user.*,tbl_user_desc.phone,tbl_user_desc.location from tbl_user join  tbl_user_desc on tbl_user.id=tbl_user_desc.user_id order by tbl_user.id desc";

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
<td>Phone</td>
<td>Location</td>
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
		<td><?php echo $row['phone']; ?></td>
		<td><?php echo $row['location']; ?></td>
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