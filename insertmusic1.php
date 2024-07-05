<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<style type="text/css">
<!--
body {
	background-image: url(images/backg.jpg);
}
#td 
{
    background:rgba(255,255,255,0.2);
	color:#de6290;
}
#table
{
    background:rgba(255,255,255,0.2);
	color:#de6290;
	
}
.style1 {
	font-size: 18px;
	font-weight: bold;
}

-->
</style>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
</head>

<body>
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0" >
  <!--DWLayoutTable-->
  <tr>
    <td height="80" colspan="6" valign="top"><img src="images/newbanner.jpg" width="1024" height="150" /></td>
  </tr>
  <tr>
    <td width="5" height="13"></td>
    <td width="874"></td>
    <td width="56"></td>
    <td width="4"></td>
    <td width="80"></td>
    <td width="5"></td>
  </tr>
  <tr>
    <td rowspan="3" valign="top" bgcolor="#000000"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td align="center" valign="middle" class="style1"><a href="login.php">Home</a></td>
    <td valign="top" bgcolor="#000000"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td align="center" valign="middle"><span class="style1"><a href="signout.php">Sign Out</a></span></td>
    <td rowspan="3" valign="top" bgcolor="#000000"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="67">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  
  
  <tr>
    <td height="563" colspan="4" align="center" valign="top">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="form1" enctype="multipart/form-data" >
	<p class='style1'>Select File : <input type="file" name="file"></p>

	<br><input type="submit" name="submit" value="submit">
	</form>
    
    <?php
	include("database.php");
	if(isset($_POST['submit']))
	{
		$location=$_FILES['file']['name'];
		$name=trim($location,".mp3");
		
		$sql=mysqli_query($con,"insert into songs (name,location) values('{$name}','{$location}')");
		if($sql)
		{
			echo "<script>";
			echo 'alert("Song name and location inserted successfully\nPlease Copy the mp3 file to media folder")';
			echo "</script>";
		}
		else
		{
			echo "not";
		}
		
	}	
?>
    </td>
  </tr>
</table>
</body>
</html>
