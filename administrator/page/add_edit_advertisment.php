<?php
$action  =  $_GET['action'];
if($action=='edit')
{
	$id  = $_GET['id'];
	$row  =  $funObj ->advertismentSel($id);
}
?>
<form action="page/act_advertisment.php?action=<?php echo $action;?><?php echo ($action=='edit')?"&id=$id":""; ?>" method="post" onSubmit="return checkGalleryPage();" enctype="multipart/form-data" >
<table  border="0" cellpadding="5" cellspacing="5" class="formDisplayTable" >
  <tr>
    <td colspan="2" class="formHeading"><h2>Advertisment <?php echo ($action=='add') ? "Add":"Edit"; ?> Section</h2></td>

  </tr>
  <tr>
    <td width="150">Advertisment Name</td>
    <td><label>
      <input type="text" name="advert_name" id="advert_name" value="<?php echo $row['advert_name']; ?>" onKeyUp="removeMessage('advert_name');">
	  <span id="advert_nameErr" class="fieldError">
	   </span>
    </label></td>
  </tr>
  <tr>
    <td width="150"> Advert. Image</td>
    <td><input type="file" name="advert_image" id="advert_image" />
	  <span id="advert_imageErr" class="fieldError">
	   </span>
    </label></td>
  </tr>
    <tr>
    <td width="150"> Advert. Description</td>
    <td><input type="text" name="advert_desc" id="advert_desc" />
	  <span id="advert_descErr" class="fieldError">
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