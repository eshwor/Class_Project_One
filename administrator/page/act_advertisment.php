<?php
include_once("../includes/application_top.php");
$action =  $_GET['action'];
$id     =  $_GET['id'];
$funObj -> table  =  TABLE_ADVERTISMENT;
if(isset($_POST['saveBtn']))
{
     foreach($_POST as $key=>$val)
	 {  $$key = $funObj->check($val); }	
	 
  $advert_image  = $_FILES['advert_image']['name'];
	 if(!empty($advert_image))
	 {
	   $temp_path   = $_FILES['advert_image']['tmp_name']; 
	   $advert_image  =  "img_".rand(0,999999).$advert_image;
	   move_uploaded_file($temp_path, "../../images/advertisment/$advert_image");
	   
	  
	 }
			 
$funObj -> data = array("advert_name"=>$advert_name,
	                    "advert_image"=>$advert_image,
						"advert_desc"=>$advert_desc,
						"added_date"=>$added_date,
	                   	"status"=>$status
	                    ); 	 	 	 	 	 
	if($action=='add')
	{ 
	   $funObj ->insert();
	   $_SESSION['successMessage'] = "Data has been added Successfully!!";
	}	
	
	 if($action=='edit')
	{  $funObj ->cond  = array("id"=>$id);
	   $funObj ->update();
	   $_SESSION['successMessage'] = "Data has been updated Successfully!!";
	   
	}	  	 
}
else
{
    if($action=='delete')
	{  $funObj ->cond  = array("id"=>$id);
	   $funObj ->delete();
	   $_SESSION['successMessage'] = "Data has been deleted Successfully!!";
	}	
}
$url  =  "../index.php?_page=advertisment";
$funObj->redirect($url);
?>