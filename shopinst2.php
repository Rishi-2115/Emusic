<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Instrument Store</title>
<style type="text/css">
<!--
body {
	background-image: url(images/black.jpeg);
}
#td 
{
    background:rgba(90,34,139,0.2);
	color:#de6290;
}
#table
{
    background:rgba(90,34,139,0.2);
	color:#de6290;
	
}

input[type="submit"]  {
    background-color: rgba(196,202,236, 0.5);
    border: none;
    color: white;
    padding: 5px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
	font-weight:bold
}
input[type="submit"]:hover
{
  background-color: rgba(0,204,0, 0.9);
}
.style1 {
	font-size: 18px;
	font-weight: bold;
}

/* unvisited link */
a:link {
    color: #B63065;
	text-decoration: none;
}

/* visited link */
a:visited {
    color: #B63065;
}

/* mouse over link */
a:hover {
    color: #B63065;
	text-decoration: underline;
}

/* selected link */
a:active {
    color: #B63065;
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

<body bgcolor="ccd2d0">
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="ccd2d0" >
  <!--DWLayoutTable-->
  <tr>
    <td height="80" colspan="8" valign="top"><img src="images/newbanner.jpg" width="1024" height="150" /></td>
  </tr>
  <tr>
    <td width="5" height="13"></td>
    <td width="127"></td>
    <td width="673"></td>
    <td width="74"></td>
    <td width="56"></td>
    <td width="4"></td>
    <td width="80"></td>
    <td width="5"></td>
  </tr>
  <tr>
    <td rowspan="2" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="middle" class="style1"><a href="login.php">Home</a></td>
    <td valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td align="center" valign="middle"><span class="style1"><a href="signout.php">Sign Out</a></span></td>
    <td rowspan="2" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="630">&nbsp;</td>
    <td align="center" valign="top">
      <?php
	session_start();
	include("database.php");
	
	$sql=mysqli_query($con,"select * from instrument");
	echo "<form action='shopinst2.php' method='post'>";
	
	if(mysqli_num_rows($sql)<1)
	{
		echo "No results found";
	}
	else
	{
		while($row=mysqli_fetch_row($sql))
		{	
			echo "<table id='table' border=0 cellspacing=4>";
			echo "<tr>";
			echo "<td valign=middle rowspan=2 width=100 height=100><img height=100 width=100 src='instrumentimages/$row[2]'></td>";
			echo "<td width='500' height='50'><font color=#B63065><br><b><a href='buyinst.php?id={$row[0]}'>".$row[1]."</a></b></font></td>";
			echo "</tr>";
			echo "<tr><td width='200' height=50><font color=#B63065><h3><b>Rs. {$row[3]}</b></h3></font></td></tr>";
			//echo "<tr><td></td><td align=center><input type='submit' name='submit' value='Buy Now'></td></tr>";
			echo "</table>";
			echo "<br>";
		}
	}
	
	
	echo "</form>";
	?>    </td>
  <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
