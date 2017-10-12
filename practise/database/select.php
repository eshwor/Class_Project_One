<?php
// server connection and database selection
mysql_connect("localhost","root","");
mysql_select_db("db_php7am");
?>
<?php
//$sql  =  "select * from tbl_user";
//$sql  =  "select * from tbl_user order by id desc";
//$sql  =  "select * from tbl_user order by username asc";
//$sql  =  "select * from tbl_user limit 0,5";
//$sql  =  "select * from tbl_user order by id desc limit 0,5";
//$sql  =  "select * from tbl_user where username like 's%'";
//$sql  =  "select * from tbl_user where id='5'";
$sql  =  "select * from tbl_user where username like '_a%' limit 0,2";
$result  =   mysql_query($sql);
$num = mysql_num_rows($result);
if($num>0)
{?>
<style>
.tableDisplay
{
background:#FFC;	
line-height:27px;
margin:0 auto;
}

.tableHead
{
background:#DDD;	
}
.tableDisplay tr:hover
{
background:#CCC;	
}

.odd
{
background:#FCC;	
}

.even
{
background:#CFC;	
}

</style>
<table cellpadding="1" cellspacing="1" border="0" width="500" class="tableDisplay">
  <tr class="tableHead">
    <th>Username</th>
    <th>Password</th>
    <th>Fullname</th>
      </tr>
  <?Php
$sn=1;
    while( $row =   mysql_fetch_array($result))	
	{ ?>
  <tr align="center" <?php echo ($sn%2==0) ? "class=even": "class=odd"; ?> >
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['fullname']; ?></td>
    </tr>
  <?php		
	  $sn++;
	}
	?>
</table>
<?php
}
?>
