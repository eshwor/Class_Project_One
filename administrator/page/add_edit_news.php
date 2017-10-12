<?php
$action  =  $_GET['action'];
if($action=='edit')
{
	$id  = $_GET['id'];
	$row  =  $funObj ->newsSel($id);
}
?>
<form action="page/act_news.php?action=<?php echo $action;?><?php echo ($action=='edit')?"&id=$id":""; ?>" method="post" onSubmit="return checkNewsPage();">
<table  border="0" cellpadding="5" cellspacing="5" class="formDisplayTable" >
  <tr>
    <td colspan="2" class="formHeading"><h2>News <?php echo ($action=='add') ? "Add":"Edit"; ?> Section</h2></td>

  </tr>
  <tr>
    <td width="150">Title</td>
    <td><label>
      <input type="text" name="news_title" id="news_title" value="<?php echo $row['news_title']; ?>" onKeyUp="removeMessage('news_title');">
	  <span id="news_titleErr" class="fieldError">
	   </span>
    </label></td>
  </tr>
  <tr>
    <td width="150">Author</td>
    <td><label>
      <input type="text" name="news_author" id="news_author" value="<?php echo $row['news_author']; ?>" onKeyUp="removeMessage('news_author');">
	  <span id="news_authorErr" class="fieldError">
	   </span>
    </label></td>
  </tr>
  
   <tr>
    <td>News Date</td>
    <td><input type="text" name="news_date" id="news_date" value="<?php echo $row['news_date']; ?>" onKeyUp="removeMessage('news_date');">	
	 <span><img src="../calender/cal.gif" id="calendar-trigger"></span>
             <span id="news_dateErr" class="fieldError"></span>
        <script>			
        Calendar.setup({
		trigger    : "calendar-trigger",
		dateFormat: "%Y-%m-%d",
        inputField : "news_date",
		min: 20050408,
        max: 20151225,
		onSelect   : function() { this.hide() }
			
    });
</script>
	</td>
  </tr>
  
  <tr>
    <td valign="top">Page Description </td>
    <td>
	<?php // Basic
	$funObj->fckEditor("news_desc", $row['news_desc'] , "../", "Default"); 
	?>
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