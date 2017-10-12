<?php
$action  =  $_GET['action'];
if($action=='edit')
{
	$id  = $_GET['id'];
	$row  =  $funObj ->staticSel($id);
}
?>
<form action="page/act_static.php?action=<?php echo $action;?><?php echo ($action=='edit')?"&id=$id":""; ?>" method="post" onSubmit="return checkStaticPage();">
<table  border="0" cellpadding="5" cellspacing="5" class="formDisplayTable" >
  <tr>
    <td colspan="2" class="formHeading"><h2>Static Page <?php echo ($action=='add') ? "Add":"Edit"; ?> Section</h2></td>

  </tr>
  <tr>
    <td width="150">Pagename</td>
    <td><label>
      <input type="text" name="pagename" id="pagename" value="<?php echo $row['pagename']; ?>" onKeyUp="removeMessage('pagename');">
	  <span id="pagenameErr" class="fieldError">
	   </span>
    </label></td>
  </tr>
  <tr>
    <td width="150">Page Title</td>
    <td><label>
      <input type="text" name="pagetitle" id="pagetitle" value="<?php echo $row['pagetitle']; ?>" onKeyUp="removeMessage('pagetitle');">
	  <span id="pagetitleErr" class="fieldError">
	   </span>
    </label></td>
  </tr>
  
  <tr>
    <td valign="top">Page Description</td>
    <td>
	<?php // Basic
	$funObj->fckEditor("pagedesc", $row['pagedesc'] , "../", "Default"); 
	?>
	</td>
  </tr>
  
   <tr>
    <td>Metaname</td>
    <td><input type="text" name="metaname" id="metaname" value="<?php echo $row['metaname']; ?>" onKeyUp="removeMessage('metaname');">
	<span id="metanameErr" class="fieldError"></span>
	</td>
  </tr>
  
   <tr>
    <td valign="top">Meta Description</td>
    <td> <textarea rows="10" cols="70" name="metadesc" id="metadesc" onKeyUp="removeMessage('metadesc');" ><?php echo $row['metadesc']; ?></textarea>
	<span id="metadescErr" class="fieldError"></span>
	</td>
  </tr>
  
   <tr>
    <td valign="top">Meta Keyword</td>
    <td>
	   <textarea rows="10" cols="70" name="metakeyword" id="metakeyword" onKeyUp="removeMessage('metakeyword');" ><?php echo $row['metakeyword']; ?></textarea>
	<span id="metakeywordErr" class="fieldError"></span>
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