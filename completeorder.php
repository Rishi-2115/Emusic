<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thank You</title>
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
.style5 {
	color: #009933;
	font-size: 24px;
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

<body bgcolor="ccd2d0">
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="ccd2d0" >
  <!--DWLayoutTable-->
  <tr>
    <td height="80" colspan="8" valign="top"><img src="images/title2.jpg" width="1024" height="80" /></td>
  </tr>
  <tr>
    <td width="5" height="13"></td>
    <td width="20"></td>
    <td width="590"></td>
    <td width="263"></td>
    <td width="56"></td>
    <td width="4"></td>
    <td width="81"></td>
    <td width="5"></td>
  </tr>
  <tr>
    <td rowspan="4" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="30">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="middle" class="style1"><a href="login.php">Home</a></td>
    <td valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td align="center" valign="middle"><span class="style1"><a href="signout.php">Sign Out</a></span></td>
    <td rowspan="4" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="16"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="116"></td>
    <td valign="top"><table id="table" width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="50" height="13"></td>
          <td width="484"></td>
          <td width="56"></td>
        </tr>
      <tr>
        <td height="26"></td>
          <td valign="top"><span class="style5">Thank You for Shopping with Us.</span></td>
          <td></td>
        </tr>
      <tr>
        <td height="16"></td>
          <td></td>
          <td></td>
        </tr>
      
        <tr>
          <td height="46"></td>
          <td valign="top">
          <?php
		session_start();
		include("database.php");
		$productid=$_SESSION['productid'];
		$date=strval(date("d/m/Y"));
		$username=$_SESSION['username'];
		
		$sql=mysqli_query($con,"select * from instrument where productid=$productid");
		$row=mysqli_fetch_row($sql);
		$productname=$row[1];
		/*echo "$username<br>";
		echo "$productid<br>";
		echo "$productname<br>";
		echo "$date";*/
		$s=session_id();
		//echo $s;
		$insert=mysqli_query($con,"insert into orderdetails (username,productid,productname,orderdate,sessionid) 
					  values('$username',$productid,'$productname','$date','$s')");
		
		
		if($insert)
		{
			$insertid=mysqli_insert_id($con);
			//echo intval($insertid);
			//echo "successful with orderid=".mysqli_insert_id($con);
			$rs=mysqli_query($con,"select * from orderdetails where orderid=$insertid");
			$rowrs=mysqli_fetch_row($rs);
			echo "<b><font color=red>Order Number: $rowrs[0]</font></b>";
			echo "<br><br><font color=blue>$productname</font>";
		}
		else
		{
			echo "Order not placed successfully";
		}
		?>        </td>
          <td></td>
        </tr>
      <tr>
        <td height="15"></td>
          <td></td>
          <td></td>
        </tr>
      
      

      
      
      
      
    </table></td>
  <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td height="528"></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
