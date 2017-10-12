<?php
$action  =  $_GET['action'];
$galId  =  $_GET['galId'];
if($action=='edit')
{
	$id  = $_GET['id'];
	$row  =  $funObj ->imageSel($id);
}
?>
<form action="page/act_image.php?action=<?php echo $action;?><?php echo ($action=='edit')?"&id=$id":""; ?>&galId=<?php echo $galId; ?>" method="post" onSubmit="return checkImagePage();" enctype="multipart/form-data" >
<table  border="0" cellpadding="5" cellspacing="5" class="formDisplayTable" >
  <tr>
    <td colspan="2" class="formHeading"><h2>Gallery Image <?php echo ($action=='add') ? "Add":"Edit"; ?> Section</h2></td>

  </tr>
  <tr>
    <td width="150">Gallery Name</td>
    <td>
	<?php
    $rowGal  =  $funObj ->gallerySel($galId);
    echo $rowGal['gallery_name'];
  ?>
	</td>
  </tr>
  <tr>
    <td width="150">Image Title</td>
    <td><label>
      <input type="text" name="image_title" id="image_title" value="<?php echo $row['image_title']; ?>" onKeyUp="removeMessage('image_title');">
	  <span id="image_titleErr" class="fieldError">
	   </span>
    </label></td>
  </tr>
  
    <tr>
    <td width="150">Image Description</td>
    <td>
     <textarea name="image_description" id="image_description" rows="10" cols="50"><?php echo $row['image_description']; ?></textarea>
	  <span id="image_titleErr" class="fieldError">
	   </span>
   </td>
  </tr>
  
  <?php if($action=='edit'){ ?>
   <tr>
    <td width="150">Current Image</td>
    <td><?Php  $img =   $row['image_name'];
	 if(file_exists("../images/gallery/$img"))
  {
     ?>
	 <a href="../images/gallery/<?php echo $img; ?>" rel="lytebox[]" title="<?Php  echo $row['gallery_name'];?>">
	 <img src="../phpthumb/phpthumb.php?src=../images/gallery/<?php echo $img; ?>&aoe=1&h=250&w=250&fltr[]=wmi|../favicon.ico" border="0" />
	 </a>
	 
	 <?php
  }
  ?>
	</td>
  </tr>
  <?php } ?>
  
  <tr>
    <td width="150">Image</td>
    <td><input type="file" name="image_name" id="image_name" />
	<input type="hidden" name="old_image" id="old_image" value="<?php echo $img; ?>" />
	  <span id="image_nameErr" class="fieldError">
	   </span>
    </label></td>
  </tr>
  
   <tr>
    <td>Added Date</td>
    <td><input type="text" name="added_date" id="added_date" value="<?php echo $row['added_date']; ?>" onKeyUp="removeMessage('added_date');">	
	 <span><img src="../calender/cal.gif" id="calendar-trigger"></span>
             <span id="added_dateErr" class="fieldError"></span>
        <script>			
        Calendar.setup({
		trigger    : "calendar-trigger",
		dateFormat: "%Y-%m-%d",
        inputField : "added_date",
		min: 20050408,
        max: 20151225,
		onSelect   : function() { this.hide() }
			
    });
</script>
	</td>
  </tr>
  
  
  
  
   <tr>
    <td>Status</td>
    <td>
      <input type="radio" name="status" value="1" <?php echo ($row['status']==1) ? "checked":""; ?>  > Active
	   <input type="radio" name="status" value="0" <?php echo ($row['status']==0) ? "checked":""; ?> > Inactive
	  
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