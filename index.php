<?php
include_once("includes/application_top.php");
$contentPage  =  isset($_GET['_page']) ?  $_GET['_page'] : "home";
if(isset($_GET['_page']) && $_GET['_page']=='static' && $_GET['sid']!="")
{
 $sid  =   $_GET['sid'];
$rowStat  =   $funObj-> getStaticContent($sid);
  $pagename  =  $rowStat['pagename'];
  $pagetitle  =  $rowStat['pagetitle'];  
  $pagedesc  =  $rowStat['pagedesc'];
  $metadesc  =  $rowStat['metadesc'];
  $metakeyword  =  $rowStat['metakeyword'];
  $rowBan  =  $funObj->getSelectedBanner($sid);
  $bannerName  =  $rowBan['banner_name'];
  $bannerImage  =  $rowBan['banner_image'];
  
}

if(empty($_SERVER['QUERY_STRING']))
{
 $sid  =   1;
$rowStat  =   $funObj-> getStaticContent($sid);
  $pagename  =  $rowStat['pagename'];
  $pagetitle  =  $rowStat['pagetitle'];  
  $pagedesc  =  $rowStat['pagedesc'];
  $metadesc  =  $rowStat['metadesc'];
  $metakeyword  =  $rowStat['metakeyword'];
  $rowBan  =  $funObj->getSelectedBanner($sid);
  $bannerName  =  $rowBan['banner_name'];
  $bannerImage  =  $rowBan['banner_image']; 
}
  	 	 	 	 	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $pagetitle; ?></title>
<meta name="description" content="<?php echo $metadesc; ?>" />
<meta name="keywords" content="<?php echo $metakeyword; ?>" />
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" />
</head>
<body>
<div id="container">
  <div id="container-header">
    <?php include_once("includes/header.php"); ?>
  </div>
  <div id="container-eyecatcher">
    <div id="container-navigation">
       <?php include_once("includes/menu.php"); ?>
    </div>
    <img src="images/banner/<?php echo $bannerImage; ?>" alt="<?php echo $bannerName; ?>"  title="<?php echo $bannerName; ?>" height="150" width="670"/> </div>
  <div id="container-content">
    <div id="content">
      <?php include_once("page/$contentPage.php"); ?>
	 
    </div>
    <!-- CONTENT END -->
    <div id="border">
	    <a href="administrator/" target="_blank">Admistrator Login Section</a>
       <?php include_once("includes/column_right.php"); ?>
    </div>
  </div>
  <div id="container-footer">
    <div id="footer">
       <?php include_once("includes/footer.php"); ?>
    </div>
  </div>
</div>
<!-- ENDE container -->
