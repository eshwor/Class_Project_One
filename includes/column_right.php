<a href="index.php?_page=contact"><h4>Feedback</h4></a>

<form action="index.php?_page=search" method="post">
<input type="text" name="searchTxt" id="searchTxt" value="<?php echo $_POST['searchTxt']; ?>" />
<input type="submit" value="Search" name="searchBtn"  />
</form>

	<hr>
<h4>More about us</h4>
      <form action="" method="post">
	  <table width="260" border="0">
  <tr>
    <td colspan="2">Login</td>
    </tr>
  <tr>
    <td>Username</td>
    <td><label>
      <input type="text" name="username" id="username" size="14">
    </label></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" id="password" size="14"></td>
  </tr>
  <tr>
    <td>Remember</td>
    <td><label>
      <input type="checkbox" name="remember" id="remember" >
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="LoginBtn" value="Login">
    </label></td>
  </tr>
  
  <tr>
    <td>Dont have <br>
	 account Yet?</td>
    <td><a href="index.php?_page=signup">signup</a></td>
  </tr>
</table>
 </form>
      <hr />
      <h4>Latest News</h4>
      <ul id="news">
	  <marquee direction="up" scrollamount="4" onmouseover="this.scrollAmount='0'" onmouseout="this.scrollAmount='4'">
	  <?Php
	  $resultRightNews  =  $funObj->getLimitedNews(4);
	  while($rowRightNews  =  $funObj->fetch_array($resultRightNews))
	  {
	  ?>
       <li><a href="index.php?_page=news&newsId=<?Php echo $rowRightNews['id']; ?>" title="<?Php echo $rowRightNews['news_title']; ?>"><?Php echo $rowRightNews['news_title']; ?></a></li>
	   <?php } ?>
	   </marquee>
      </ul>
      <hr />
	  <?php
  $rowStat  =   $funObj-> getStaticContent(6);
  $pagename  =  $rowStat['pagename'];
  $pagedesc  =  $rowStat['pagedesc'];


	   ?>
      <h4><?php echo $pagename; ?></h4>
      <p><?php echo $pagedesc; ?></p>