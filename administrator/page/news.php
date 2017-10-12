<?php
$result   =  $funObj -> newsListPage();
?>
<table width="960" cellpadding="1" cellspacing="1" border="0">
  <tr>
    <td colspan="5"><h2>News  Management Section </h2></td>
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
		<a href="includes/exportToExcel.php?data=news">Export to csv</a> | 
	<a href="index.php?_page=add_edit_news&action=add" title="Add">
	<img src="images/add-new.png" title="Add" alt="a" border="0"></a>
	</td>
  </tr>
  </table>
  
  <br />
  
  <table width="970" cellpadding="1" cellspacing="1" border="0" class="tableDisplay">
  
  <tr class="tableHead">
    <th>Title</th>
    <th>Description</th>
    <th>Author</th>
	 <th>Date</th>
    <th>Status</th>
    <th colspan="2">Action</th>
  </tr>
<?Php
if($result[0]>0)
{  
   $sn=1;
   $res  =  $funObj ->exec($result[1]);
   while($row  =  $funObj -> fetch_assoc($res))
   {
?>
 	 	 	 	 
  <tr class="<?php echo ($sn%2==0) ? "even":"odd"; ?>" >
    <td><?Php  echo $row['news_title'];?></td>
   <td><?Php  echo substr(strip_tags( $row['news_desc']),0,50);?></td>
     
    <td><?Php  echo $row['news_author'];?></td>
	 <td><?Php  echo date("F d,Y",strtotime($row['news_date']));?></td>
	<td><?Php  echo ($row['status']==1) ? "Active":"Inactive";?></td>
    <td><a href="index.php?_page=add_edit_news&action=edit&id=<?php echo $row['id']; ?>" title="Edit"><img src="images/edit.gif" border="0" title="Edit" alt="Edit" /></a></td>
    <td><a href="page/act_news.php?action=delete&id=<?php echo $row['id']; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this data');"><img src="images/delete.png" border="0" title="Delete" alt="Delete" /></a></td>
  </tr>
  
  <?Php
  $sn++;
  }
  ?>
  <tr><td colspan="5" align="right"><?php echo $result[2]; ?></td></tr>
  
  <?php
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
