<?php
$action  =  $_GET['action'];
if($action=='edit')
{
	$id  = $_GET['id'];
	$row  =  $funObj ->bannerSel($id);
}
echo $_SERVER['PHP_SELF'];
echo "<hr>";
echo $_SERVER['QUERY_STRING'];
echo "<hr>";
echo __FILE__;
echo "<hr>";

?>
<form action="page/act_banner.php?action=<?php echo $action;?><?php echo ($action=='edit')?"&id=$id":""; ?>" method="post" onSubmit="return checkadvertismentPage();" enctype="multipart/form-data" >
<table  border="0" cellpadding="5" cellspacing="5" class="formDisplayTable" >
  <tr>
    <td colspan="2" class="formHeading"><h2>Banner <?php echo ($action=='add') ? "Add":"Edit"; ?> Section</h2></td>

  </tr>
  <tr>
    <td width="150">Banner Name</td>
    <td><label>
      <input type="text" name="banner_name" id="banner_name" value="<?php echo $row['banner_name']; ?>" onKeyUp="removeMessage('banner_name');">
	  <span id="banner_nameErr" class="fieldError">
	   </span>
    </label></td>
  </tr>
  <tr>
    <td width="150"> Banner Image</td>
    <td><input type="file" name="banner_image" id="banner_image" />
	  <span id="banner_imageErr" class="fieldError">
	   </span>
    </label></td>
  </tr>
   <tr>
    <td width="150">Page Name</td>
    <td><select name="static_id" id="static_id"  onChange="removeMessage('static_id');">
    <option value="">Choose Pagename</option>
    <?php $results  =  $funObj->staticList();
	while($rowStat  = $funObj->fetch_assoc($results)){
	?>
    <option value="<?php echo $rowStat['id']; ?>" <?php echo ($rowStat['id']==$row['static_id']) ? "selected":""; ?> ><?php echo $rowStat['pagename']; ?></option>
    <?php } ?>
    </select>
    
    
   
	  <span id="static_idErr" class="fieldError">
	   </span>
    </td>
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