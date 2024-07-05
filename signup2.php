<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Signup</title>
<style type="text/css">
<!--
body {
	background-image: url(images/banner4.jpg);
}

.style10 {
	color: #A92C5E;
	font-weight: bold;
	font-size: 36px;
}
#td
{
	background: rgba(100, 100, 100, 0.4);
}
.style16 {font-size: 18px}
.style17 {
	color: #FFFFFF;
	font-weight: bold;
}

.style18 {
	font-size: 18px;
	font-weight: bold;
	color: #FFFFFF;
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


<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="80" colspan="5" valign="top"><img src="images/title2.jpg" width="1024" height="80" /></td>
  </tr>
  <tr>
    <td width="5" height="13"></td>
    <td width="257"></td>
    <td width="500"></td>
    <td width="257"></td>
    <td width="5"></td>
  </tr>
  <tr>
    <td rowspan="5" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="80" colspan="3" valign="top"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','1014','height','80','src','images/bar2','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','images/bar2' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="1014" height="80">
      <param name="movie" value="images/bar2.swf" />
      <param name="quality" value="high" />
      <embed src="images/bar2.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="1014" height="80"></embed>
    </object></noscript></td>
    <td rowspan="4" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="180">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="100">&nbsp;</td>
    <td align="center" valign="middle" id="td">
      <?php
	include("database.php");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];
	$dateofbirth=$_POST['dateofbirth'];
	$phone=$_POST['phone'];
	
	$sql=mysqli_query($con,"insert into user (username,password,firstname,lastname,email,address,city,gender,dateofbirth,phone) 
					  values('$username','$password','$firstname','$lastname','$email','$address','$city','$gender','$dateofbirth','$phone')");
					  
	if($sql)
	{
		echo "<font color=#A92C5E>";
		echo "<h2>Your Account <b><font color=blue>$username</font></b> created successfully";
		echo "<br><a href='index.php'>Click Here</a> to Login</h2>";
		echo "<font>";
	}
	?>    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="286">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  
  
  
  <tr>
    <td height="14"></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>
