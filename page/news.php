<?php
$newsId   =  $_GET['newsId'];
if(!empty($newsId))
{
  $rowNews  =  $funObj->getSelectedNews($newsId);
?>
   <table cellpadding="5" cellspacing="5" border="0" width="430" class="tableNews">
   <tr>
   <td><h3> <?php echo $rowNews['news_title']; ?></h3> </td>
   <td align="right"><?php echo date("F d,Y",strtotime($rowNews['news_date'])); ?></td>
   </tr>
   <tr>
   <td colspan="2"><?php echo $rowNews['news_desc']; ?> </td>
   </tr>
   <tr>
   <td></td>
   <td align="right"><b><?php echo $rowNews['news_author']; ?></b></td>
   </tr>
   </table>

<?php
}
else
{ 
   $newsPage  = $funObj->getAllNews();
   
    if($newsPage[0]>0)
	{
	    $resultsNews  =  $funObj->exec($newsPage[1]);
		while($rowNews  =  $funObj->fetch_assoc($resultsNews))
		{
		?>
		<table cellpadding="5" cellspacing="5" border="0" width="430" class="tableNews">
   <tr>
   <td><h3> <?php echo $rowNews['news_title']; ?></h3> </td>
   <td align="right"><?php echo date("F d,Y",strtotime($rowNews['news_date'])); ?></td>
   </tr>
   <tr>
   <td colspan="2"><?php echo $rowNews['news_desc']; ?> </td>
   </tr>
   <tr>
   <td></td>
   <td align="right"><b><?php echo $rowNews['news_author']; ?></b></td>
   </tr>
   </table>
   
   <br />
   
		
		<?php
		}
		echo $newsPage[2];
	}
}
?>