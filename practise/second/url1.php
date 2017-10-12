<!--<a href="url2.php">click here</a>-->
<!--<a href="url2.php?name=rani&age=25&location=bkt">click me</a>-->
<?php
 $name="ram & shyam";
 $age=25;
 ?>
 <a href="url2.php?name=<?php echo urlencode($name);?>&age=<?php echo $age;?>">
 click me</a>