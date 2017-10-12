<?php
include_once("../includes/application_top.php");
$action =  $_GET['action'];
$id     =  $_GET['id'];
$funObj -> table  =  TABLE_GALLERY;

if(isset($_POST['saveBtn']))
{
     foreach($_POST as $key=>$val)
	 {  $$key = $funObj->check($val); }	
	 
	 
	  $gallery_image  = $_FILES['gallery_image']['name'];
	 if(!empty($gallery_image))
	 {
	   $temp_path   = $_FILES['gallery_image']['tmp_name'];
	   $gallery_image  =  "img_".rand(0,999999).$gallery_image;
	   move_uploaded_file($temp_path, "../../images/gallery/$gallery_image");
	 }
	 
	
	  	 
		 
$funObj -> data = array("gallery_name"=>$gallery_name,
	                    "gallery_image"=>$gallery_image,
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
$url  =  "../index.php?_page=gallery";
$funObj->redirect($url);
?>