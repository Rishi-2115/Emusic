<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Review Order</title>
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
	/*border: 1px solid grey;*/
	border-collapse:collapse;
	background:rgba(255,255,255,0.2);
	
}

input[type="submit"]  {
    background-color: rgba(0,204,0,0.6);
    border: none;
    color: white;
    padding: 5px 60px;
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
.style3 {
	font-size: 28px;
	color: #FF0000;
	font-weight: bold;
}
.style4 {
	color: #FF0000;
	font-weight: bold;
	font-size: 20px;
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
    <td height="80" colspan="9" valign="top"><img src="images/title2.jpg" width="1024" height="80" /></td>
  </tr>
  <tr>
    <td width="5" height="13"></td>
    <td width="63"></td>
    <td width="648"></td>
    <td width="23"></td>
    <td width="139"></td>
    <td width="56"></td>
    <td width="4"></td>
    <td width="81"></td>
    <td width="5"></td>
  </tr>
  <tr>
    <td rowspan="8" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="middle" class="style1"><a href="login.php">Home</a></td>
    <td valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td align="center" valign="middle"><span class="style1"><a href="signout.php">Sign Out</a></span></td>
    <td rowspan="8" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="34">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="80">&nbsp;</td>
    <td valign="top"><span class="style3">Review Your Order</span></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  
  <tr>
    <td height="180">&nbsp;</td>
    <td valign="top"><table id="table" width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="20" height="180">&nbsp;</td>
          <td width="220" valign="top">
              
            <?php
    	session_start();
		include("database.php");
		$productid=$_SESSION['productid'];
		$username=$_SESSION['username'];
		
		$sql=mysqli_query($con,"select * from user where username='$username'");
		//echo $productid;
		//echo $username;
		$row=mysqli_fetch_row($sql);
		echo "<table border=0 cellspacing=4>";
		echo "<th width=220 align=left><font color=red>Shipping Address</font></th>";
		echo "<tr><td><font color=blue>$row[6]</font></td></tr>";
		echo "<tr><td><font color=blue>$row[7]</font></td></tr>";
		echo "<tr><td><font color=blue>India</font></td></tr>";
		echo "<tr><td><font color=blue>Phone: $row[10]</font></td></tr>";
		echo "</table>";
		?>        </td>
          <td width="167">&nbsp;</td>
          <td width="220" valign="top">
          <?php
          echo "<table border=0 cellspacing=4>";
		echo "<th width=220 align=left><font color=red>Payment Method</font></th>";
		echo "<tr><td><font color=blue>Cash On Delivery (COD)</font></td></tr>";
		/*echo "<tr><td><font color=blue>$row[7]</font></td></tr>";
		echo "<tr><td><font color=blue>India</font></td></tr>";
		echo "<tr><td><font color=blue>Phone: $row[10]</font></td></tr>";*/
		echo "</table>";
		?>          </td>
          <td width="21">&nbsp;</td>
        </tr>
      
    </table></td>
    <td>&nbsp;</td>
    <td colspan="4" rowspan="3" valign="top"><table id="table" width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="25" height="36">&nbsp;</td>
        <td width="140"></td>
        <td width="115"></td>
      </tr>
      <tr>
        <td height="46" colspan="3" align="center" valign="top">
          <?php
		  echo "<form action='completeorder.php' method='post'>";
		echo "<input type=submit name=submit value='Place Order'>";
		echo "</form>";
		?>        </td>
        </tr>
      <tr>
        <td height="28">&nbsp;</td>
        <td></td>
        <td></td>
      </tr>
      
      
      <tr>
        <td height="60">&nbsp;</td>
        <td valign="top"><span class="style4">Order Total:</span></td>
        <td valign="top">
          <?php
		$sql2=mysqli_query($con,"select * from instrument where productid=$productid");
		  	$row2=mysqli_fetch_row($sql2);
        echo "<span class=style4><font color=red><b>Rs. $row2[3]</b></font></span>";
		?>        </td>
      </tr>
      
      <tr>
        <td height="50">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
      
      
      
      
    </table></td>
  </tr>
  <tr>
    <td height="16"></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="24"></td>
    <td rowspan="2" valign="top"><table id="table" width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="19" height="15"></td>
        <td width="100"></td>
        <td width="18"></td>
        <td width="220"></td>
        <td width="291"></td>
      </tr>
      <tr>
        <td height="100"></td>
        <td valign="top">
          <?php
		  	$sql1=mysqli_query($con,"select * from instrument where productid=$productid");
		  	$row1=mysqli_fetch_row($sql1);
        	echo "<table>";
			echo "<tr><td><img height=100 width=100 src='instrumentimages/$row1[2]'></td></tr>";
			echo "</table>";
			?>        </td>
        <td>&nbsp;</td>
        <td rowspan="2" align="left" valign="top">
          <?php
	
        	echo "<table cellspacing=4>";
			echo "<tr><td><font color=red><b>$row1[1]</b></font></td></tr>";
			echo "<tr><td><font color=blue><b>Rs. $row1[3]</b></font></td></tr>";
			echo "</table>";
			?>        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="65"></td>
        <td>&nbsp;</td>
        <td></td>
        <td></td>
      </tr>
      
    </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="156"></td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  
  
  
  
  
  <tr>
    <td height="170"></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
