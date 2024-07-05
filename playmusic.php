<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Play Music</title>
<style type="text/css">
<!--
body {
	background-image: url(images/black.jpeg);
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
    <td rowspan="3" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td align="center" valign="middle" class="style1"><a href="login.php">Home</a></td>
    <td valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td align="center" valign="middle"><span class="style1"><a href="signout.php">Sign Out</a></span></td>
    <td rowspan="3" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="67">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  
  
  <tr>
    <td height="563" colspan="4" align="center" valign="top">
      <?php
	include("database.php");
	$sql = mysqli_query($con,"Select*from songs");
	if(mysqli_num_rows($sql)>0)
	{
		echo "<table cellpadding=10 id='table'>";
		//echo "<th>ID</th>";
		//echo "<th>Name</th>";
		//echo "<th>Music</th>";
		while($row=mysqli_fetch_row($sql))
		{
			echo "<tr><td><b>$row[1]</b></td>
			<td>
			<audio controls>
			<source src='media/$row[2]' type='audio/mpeg'>
			</audio>
			</td></tr>";
		}
		echo "</table>";
	}	
	else
	{
		echo "No tracks selected";
	}
?>    </td>
  </tr>
</table>
</body>
</html>
