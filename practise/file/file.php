<?php
// folder creation code
/*if(!file_exists("ram"))
{
  $fol  =  mkdir("ram");
   if($fol)
   {
	 echo "folder created Successfully<br>";  
   }
}
else
{
echo "Folder already Exist!!<br>";	
}*/

// file creation code
/*$files   =  touch("ram/ram.xls");
if($files) 
{
echo "file created Successfully<br>";	
}*/

$path  = "ram/ram.txt";

// writing in file
/*$fp  =  fopen($path, "w");
$str  =  "yester day is holy purnima";
//fputs($fp, $str);
fwrite($fp, $str);
fclose($fp);*/

// read the file
/*$fp  =  fopen($path, "r");
//while(!feof($fp))
//{
//echo fgets($fp);	
//}
echo fread($fp,filesize($path));
fclose($fp);*/

// read the file
/*$f  = file($path);
foreach($f as $k=>$v)
{ echo $v."<br>";	}*/

// copying file
//copy($path,"ram/sita.txt");

// rename file
//rename("ram/sita.txt","ram/hari.txt");

// deleting file
/*$del  =  unlink("ram/ram.doc");
if($del) 
{
echo "file deleted Successfully<br>";	
}*/

// deleting folder and its content
if(file_exists("ram"))
{
      $mydir   =  "ram/";
	  $d    =   dir($mydir);
	  while($entry  =  $d->read())
	  {
		  if($entry!="." and $entry!="..")
		  {
		    echo $entry."<br>";  
			unlink($mydir.$entry);
			echo "=> file is delated<hr>";
		  }
	  }
	  
	  $d->close();
	  rmdir($mydir);
}

?>