<?php
$action  =  $_GET['action'];
if($action=='edit')
{
	$id  = $_GET['id'];
	$row  =  $funObj ->gallerySel($id);
}
?>
<form action="page/act_gallery.php?action=<?php echo $action;?><?php echo ($action=='edit')?"&id=$id":""; ?>" method="post" onSubmit="return checkGalleryPage();" enctype="multipart/form-data" >
<table  border="0" cellpadding="5" cellspacing="5" class="formDisplayTable" >
  <tr>
    <td colspan="2" class="formHeading"><h2>Gallery <?php echo ($action=='add') ? "Add":"Edit"; ?> Section</h2></td>

  </tr>
  <tr>
    <td width="150">Gallery Name</td>
    <td><label>
      <input type="text" name="gallery_name" id="gallery_name" value="<?php echo $row['gallery_name']; ?>" onKeyUp="removeMessage('gallery_name');">
	  <span id="gallery_nameErr" class="fieldError">
	   </span>
    </label></td>
  </tr>
  <tr>
    <td width="150">Image</td>
    <td><input type="file" name="gallery_image" id="gallery_image" />
	  <span id="gallery_imageErr" class="fieldError">
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