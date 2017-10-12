<?php
$result   =  $funObj -> bannerListPage();
?>
<table width="960" cellpadding="1" cellspacing="1" border="0">
  <tr>
    <td colspan="5"><h2>Banner Management Section </h2></td>
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
	<a href="index.php?_page=add_edit_banner&action=add" title="Add">
	<img src="images/add-new.png" title="Add" alt="a" border="0"></a>
	</td>
  </tr>
</table>
  
  <br />
  
  <table width="970" cellpadding="1" cellspacing="1" border="0" class="tableDisplay">
  
  <tr class="tableHead">
    <th>Name</th>
    <th>Image</th>
        <th>Added Date</th>
	<th>Page Name</th>
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
    <td><?Php  echo $row['banner_name'];?></td>
   <td><?Php  $img =   $row['banner_image'];?>
  <!-- <img src="../images/gallery/<?php echo $img; ?>" border="0" height="150" width="150" />-->
  
  <!--
  rel="lytebox"
  rel="lytebox[]"
  rel="lyteframe[]"
   rel="lyteshow[]"
  
  
  &fltr[]=wmt|ishwor|3|C|#FF0
  &fltr[]=drop|10
  &fltr[]=fram|10|5
  &fltr[]=elip
  &fltr[]=flip|x
  &fltr[]=flip|y
  &ra=30
  &ar=p
  &ar=P
  &ar=l
  &fltr[]=wmi|../favicon.ico
  -->
  
  <?php
  if(file_exists("../images/banner/$img"))
  {
     ?>
	 <a href="../images/banner/<?php echo $img; ?>" rel="lytebox[]" title="<?Php  echo $row['banner_name'];?>">
	 <img src="../phpthumb/phpthumb.php?src=../images/banner/<?php echo $img; ?>&aoe=1&h=150&w=150&fltr[]=wmi|../favicon.ico" border="0" />
	 </a>
	 
	 <?php
  }
  ?>
  
  
   </td>
	<td><?Php  echo date("F d,Y",strtotime($row['added_date']));?></td>
    	<td><?Php  $statId  =   $row['static_id'];
		$rowStat  =  $funObj ->staticSel($statId);
		echo $rowStat['pagename'];
		?></td>
	<td><?Php  echo ($row['status']==1) ? "Active":"Inactive";?></td>
    <td><a href="index.php?_page=add_edit_banner&action=edit&id=<?php echo $row['id']; ?>" title="Edit"><img src="images/edit.gif" border="0" title="Edit" alt="Edit" /></a></td>
    <td><a href="page/act_banner.php?action=delete&id=<?php echo $row['id']; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this data');"><img src="images/delete.png" border="0" title="Delete" alt="Delete" /></a></td>
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
