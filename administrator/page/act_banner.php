<?php
include_once("../includes/application_top.php");
$action =  $_GET['action'];
$id     =  $_GET['id'];
$funObj -> table  =  TABLE_BANNER;
if(isset($_POST['saveBtn']))
{
     foreach($_POST as $key=>$val)
	 {  $$key = $funObj->check($val); }	
	 
	  $banner_image  = $_FILES['banner_image']['name'];
	 if(!empty($banner_image))
	 {
	   $temp_path   = $_FILES['banner_image']['tmp_name'];
	   $banner_image  =  "img_".rand(0,999999).$banner_image;
	   move_uploaded_file($temp_path, "../../images/banner/$banner_image");
	 }
	 	 
$funObj -> data = array("banner_name"=>$banner_name,
	                    "banner_image"=>$banner_image,
						"static_id"=>$static_id,
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
$url  =  "../index.php?_page=banner";
$funObj->redirect($url);
?>