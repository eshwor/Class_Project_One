<?php
$result   =  $funObj -> advertismentListPage();
?>
<table width="960" cellpadding="1" cellspacing="1" border="0">
  <tr>
    <td colspan="5"><h2>Advertisment Management Section </h2></td>
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
	<a href="index.php?_page=add_edit_advertisment&action=add" title="Add">
	<img src="images/add-new.png" title="Add" alt="a" border="0"></a>
	</td>
  </tr>
</table>
  
  <br />
  
  <table width="970" cellpadding="1" cellspacing="1" border="0" class="tableDisplay">
  
  <tr class="tableHead">
    <th>Adv. Name</th>
    <th>Adv. Image</th>
	<th>Adv. Discription </th>
    <th>Addaded date </th>
   <th>Status</th>
  <th colspan="3">Action</th>
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
    <td><?Php  echo $row['advert_name'];?></td>
    
   <td><?Php  $img =   $row['advert_image'];?>
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
  if(file_exists("../images/advertisment/$img"))
  {
     ?>
	 <a href="../images/advertisment/<?php echo $img; ?>" rel="lytebox[]" title="<?Php  echo $row['advert_name'];?>">
	 <img src="../phpthumb/phpthumb.php?src=../images/advertisment/<?php echo $img; ?>&aoe=1&h=150&w=150&fltr[]=wmi|../favicon.ico" border="0" />
	 </a>
	 
	 <?php
  }
  ?>
      <td><?Php  echo $row['advert_desc'];?></td>

  
   </td>
	<td><?Php  echo date("F d,Y",strtotime($row['news_date']));?></td>
	<td><?Php  echo ($row['status']==1) ? "Active":"Inactive";?></td>
    <td><a href="index.php?_page=add_edit_advertisment&action=edit&id=<?php echo $row['id']; ?>" title="Edit"></a></td>
    <td><a href="index.php?_page=add_edit_advertisment&amp;action=edit&amp;id=<?php echo $row['id']; ?>" title="Edit"><img src="images/edit.gif" border="0" title="Edit" alt="Edit" /></a><a href="page/act_advertisment.php?action=delete&id=<?php echo $row['id']; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this data');"></a></td>
    <td><a href="page/act_advertisment.php?action=delete&amp;id=<?php echo $row['id']; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this data');"><img src="images/delete.png" border="0" title="Delete" alt="Delete" /></a></td>
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
