<?php
include_once("../includes/application_top.php");
$action =  $_GET['action'];
$id     =  $_GET['id'];
$galId     =  $_GET['galId'];
$funObj -> table  =  TABLE_IMAGE;

if(isset($_POST['saveBtn']))
{
     foreach($_POST as $key=>$val)
	 {  $$key = $funObj->check($val); }	
	 
	 
	  $image_name  = $_FILES['image_name']['name'];
	 if(!empty($image_name))
	 {
	   $temp_path   = $_FILES['image_name']['tmp_name'];
	   $image_name  =  "img_".rand(0,999999).$image_name;
	   move_uploaded_file($temp_path, "../../images/gallery/$image_name");
	   unlink("../../images/gallery/$old_image");
	 }
	 else
	 {
	  $image_name   =  $old_image;
	 }
	 
	
	  	 
		 
$funObj -> data = array("gallery_id"=>$galId,
                        "image_title"=>$image_title,
                        "image_description"=>$image_description,
	                    "image_name"=>$image_name,
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
	{  
	   $row  =  $funObj ->imageSel($id);
	   $image_name  =  $row['image_name'];
	   unlink("../../images/gallery/$image_name");
	   
	   $funObj ->cond  = array("id"=>$id);
	   $funObj ->delete();
	   $_SESSION['successMessage'] = "Data has been deleted Successfully!!";
	}	
}
$url  =  "../index.php?_page=image&galId=$galId";
$funObj->redirect($url);
?>