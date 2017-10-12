<?php
if(isset($_POST['searchBtn']))
{
$searchText   =  $_POST['searchTxt'];
?>
<h2>Search Result  of keyword : <?Php echo $searchText; ?></h2>

		<?Php
			$resultStaticSearch  =  $funObj-> staticPageSearch($searchText);
			$numResult  =    $funObj->total_rows($resultStaticSearch); 
			
			if($numResult>0)
			{
				while($rowResultSearch  = $funObj->fetch_assoc($resultStaticSearch))
				{ ?>
				<a href="index.php?_page=static&sid=<?php echo  $rowResultSearch['id']; ?>" target="_blank"><?php echo  $rowResultSearch['pagename']; ?> </a> <br>
				<?php }
			}
			?>
			
			<hr><br>
			
			<?Php
			$resultNewsSearch  =  $funObj-> newsPageSearch($searchText);
			$numResult  =    $funObj->total_rows($resultNewsSearch); 
			
			if($numResult>0)
			{
				while($rowResultNews  = $funObj->fetch_assoc($resultNewsSearch))
				{ ?>
				<a href="index.php?_page=news&newsId=<?php echo  $rowResultNews['id']; ?>" target="_blank"><?php echo  $rowResultNews['news_title']; ?> </a> <br>
				<?php }
			}
			?>
	
	
	 

<?php
}
?>