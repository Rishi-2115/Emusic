<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buy Instrument</title>
<style type="text/css">
<!--
/*body {
	background-image: url(images/banner4.jpg);
}*/
#td 
{
    background:rgba(255,255,255,0.2);
	/*color:#de6290;*/
	color:red
}
#table
{
    /*background:rgba(0,0,0,0.1);
	color:#de6290;*/
	border: 1px solid #000000;
	border-collapse:collapse;
	
}

input[type="submit"]  {
    background-color: rgba(0,204,0,0.6);
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
  background-color: rgba(0,204,0,1);
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

ul {
    padding:0;
    /*list-style-type: none;*/
	/*webkit-padding-start: 0;*/
}

fieldset{
  border-color: #D45A8B;
  /*border-style: solid;*/
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
    <td height="80" colspan="11" valign="top"><img src="images/title2.jpg" width="1024" height="80" /></td>
  </tr>
  <tr>
    <td width="5" height="13"></td>
    <td width="13"></td>
    <td width="350"></td>
    <td width="61"></td>
    <td width="18"></td>
    <td width="271"></td>
    <td width="161"></td>
    <td width="56"></td>
    <td width="4"></td>
    <td width="80"></td>
    <td width="5"></td>
  </tr>
  <tr>
    <td rowspan="8" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="middle" class="style1"><a href="login.php">Home</a></td>
    <td valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td align="center" valign="middle"><span class="style1"><a href="signout.php">Sign Out</a></span></td>
    <td rowspan="8" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
    <td rowspan="3" valign="top">
      <?php
	session_start();
	include("database.php");
	$productid=$_REQUEST['id'];
	$_SESSION['productid']=$productid;
	//echo $productid;
	mysqli_set_charset($con,"utf8");
	$sql=mysqli_query($con,"select * from instrument where productid=$productid");
	$row=mysqli_fetch_row($sql);
	echo "<img height=350 width=350 src='instrumentimages/$row[2]'>";
	?>    </td>
    <td>&nbsp;</td>
    <td colspan="6" align="left" valign="middle">
	  <?php 
	echo "<h2><font color=Red>$row[1]</font></h2>";
	echo "<h3><font color=#5E005E>Rs. $row[3]</font></h3>";
	?>    </td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td height="280">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="5" valign="top">
      <?php
	echo "<ul id='ul'>";
	echo "<font color=#5E005E>";
    echo "<li>$row[5]</li><br>";
	echo "<li>$row[6]</li><br>";
	echo "<li>$row[7]</li><br>";
	echo "<li>$row[8]</li><br>";
	echo "</font>";
	echo "</ul>";
	?>    </td>
  </tr>
  
  
  
  
  
  
  
  
  <tr>
    <td height="130">&nbsp;</td>
    <td colspan="8" valign="top">
      <?php
    echo "<table>";
	echo "<th align=left><h3><font color=red>Product Description</font></h3></th>";
	echo "<tr><td><font color=#5E005E>$row[9]</font></td></tr>";
	echo "</table>";
	?>    </td>
  </tr>
  <tr>
    <td height="14"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="130"></td>
    <td colspan="4" valign="top">
      <?php
    echo "<table>";
	echo "<th align=left><h3><font color=red>Product Information</font></h3></th>";
	echo "<tr><td id='td'><b>Brand</b></td><td><font color=#5E005E><b>$row[10]</b></font></td></tr>";
	echo "<tr><td id='td'><b>Weight</b></td><td><font color=#5E005E><b>$row[11] Kg</b></font></td></tr>";
	//echo "<tr><td id='td'><b>Height</b></td><td><font color=#5E005E><b>$row[12]</b></font></td></tr>";
	//echo "<tr><td id='td'><b>Width</b></td><td><font color=#5E005E><b>$row[13]</b></font></td></tr>";
	echo "<tr><td id='td'><b>Product Dimension</b></td><td><font color=#5E005E><b>$row[14]</b></font></td></tr>";
	echo "</table>";
	?>    </td>
  <td colspan="4" align="left" valign="middle">
   <?php
    echo "<form action=revieworder.php method=post>";
	echo "<input type=submit name=submit value='Buy Now'>";
	echo "</form>";
	?>  </td>
  </tr>
  <tr>
    <td height="34"></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
