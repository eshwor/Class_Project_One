// JavaScript Document
function focusMe()
{
 document.getElementById('username').focus();	
}

function checkLogin()
{
  if(document.getElementById('username').value=="" && document.getElementById('password').value==""	)
  {  document.getElementById('messageDiv').innerHTML = "Please enter the username and password!!";
	 document.getElementById('username').focus(); 
	 return false;
  }
  
  else if(document.getElementById('username').value=="")
  {  document.getElementById('messageDiv').innerHTML = "Please enter the username";
	 document.getElementById('username').focus(); 
	 return false;
  }
  
   else if(document.getElementById('password').value=="")
  {  document.getElementById('messageDiv').innerHTML = "Please enter the password";
	 document.getElementById('password').focus(); 
	 return false;
  }
  else
   return true;
}


function checkAdminUser()
{
	 if(document.getElementById('username').value=="")
  {  document.getElementById('usernameErr').innerHTML = "Please enter the username!!";
	 document.getElementById('username').focus(); 
	 return false;
  }
  
   else if(document.getElementById('password').value=="")
  {  document.getElementById('passwordErr').innerHTML = "Please enter the password!!";
	 document.getElementById('password').focus(); 
	 return false;
  }
   else if(document.getElementById('fullname').value=="")
  {  document.getElementById('fullnameErr').innerHTML = "Please enter the fullname!!";
	 document.getElementById('fullname').focus(); 
	 return false;
  }
  else
   return true;
}


function removeMessage(elementId)
{
	document.getElementById(elementId+'Err').innerHTML = "";
}

function checkGalleryPage()
{
	 if(document.getElementById('gallery_name').value=="")
  {  document.getElementById('gallery_nameErr').innerHTML = "Please enter the gallery name!!";
	 document.getElementById('gallery_name').focus(); 
	 return false;
  }
  
   else if(document.getElementById('gallery_image').value=="")
  {  document.getElementById('gallery_imageErr').innerHTML = "Please upload the image!!";
	 document.getElementById('gallery_image').focus(); 
	 return false;
  }
    else if(document.getElementById('gallery_image').value!="" && !document.getElementById('gallery_image').value.match(/\.(jpg|jpeg|gif|png|bmp|JPG|JPGE|GIF|PNG|BMP)/)) 
  {  document.getElementById('gallery_imageErr').innerHTML = "Please upload the valid image!!";
	 document.getElementById('gallery_image').focus(); 
	 return false;
  }
  else  if(document.getElementById('added_date').value=="")
  {  document.getElementById('added_dateErr').innerHTML = "Please enter the added date!!";
	 document.getElementById('added_date').focus(); 
	 return false;
  }
  else
   return true;
}

