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
input[type="text"]
{
    background: rgba(255, 255, 255, 0.5);
    border: none;
    outline: none;
}
input[type="password"]
{
    background: rgba(255, 255, 255, 0.5);
    border: none;
    outline: none;
}
.style10 {
	color: #A92C5E;
	font-weight: bold;
	font-size: 36px;
}
#td
{
	background: rgba(100, 100, 100, 0.2);
}
.style16 {font-size: 18px}
.style17 {
	color: #FFFFFF;
	font-weight: bold;
}

input[type="submit"]  {
    background-color: rgba(196,202,236,0.6);
    border: none;
    color: black;
    padding: 10px 100px;
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
  color:#FFFFFF
}
textarea
{
	background: rgba(255, 255, 255, 0.5);
    border: none;
    outline: none;
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
</script>
<script language="javascript">
function check()
{
	if(document.form1.username.value=="")
	{
		alert("Please enter Username");
		document.form1.username.focus();
		return false;
	}
	
	if(document.form1.password.value=="")
	{
		alert("Please enter Password");
		document.form1.password.focus();
		return false;
	}
	
	if(document.form1.confirmpassword.value=="")
	{
		alert("Please enter ConfirmPassword");
		document.form1.confirmpassword.focus();
		return false;
	}
	
	if(document.form1.password.value!=document.form1.confirmpassword.value)
	{
		alert("Password and ConfirmPassword Does Not Match");
		document.form1.confirmpassword.focus();
		return false;
	}
	
	if(document.form1.firstname.value=="")
	{
		alert("Please enter Firstname");
		document.form1.firstname.focus();
		return false;
	}
	
	if(document.form1.lastname.value=="")
	{
		alert("Please enter Lastname");
		document.form1.lastname.focus();
		return false;
	}
	
	if(document.form1.email.value=="")
	{
		alert("Please enter E-mail");
		document.form1.email.focus();
		return false;
	}
	
	e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email \neg. abc@pqr.xyz");
			document.form1.email.focus();
			return false;
		}
	
	if(document.form1.address.value=="")
	{
		alert("Please enter Address");
		document.form1.address.focus();
		return false;
	}
	
	if(document.form1.city.value=="")
	{
		alert("Please enter City");
		document.form1.city.focus();
		return false;
	}
	
	if(document.form1.gender.value=="")
	{
		alert("Please specify Gender");
		return false;
	}
	
	if(document.form1.dateofbirth.value=="")
	{
		alert("Please enter Date Of Birth \nFormat : DD/MM/YYYY");
		document.form1.dateofbirth.focus();
		return false;
	}
	
	if(document.form1.phone.value=="")
	{
		alert("Please enter Phone Number");
		document.form1.phone.focus();
		return false;
	}
	
	return true;
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
    <td width="307"></td>
    <td width="400"></td>
    <td width="307"></td>
    <td width="5"></td>
  </tr>
  <tr>
    <td rowspan="6" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="80" colspan="3" valign="top"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','1014','height','80','src','images/bar2','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','images/bar2' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="1014" height="80">
      <param name="movie" value="images/bar2.swf" />
      <param name="quality" value="high" />
      <embed src="images/bar2.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="1014" height="80"></embed>
    </object></noscript></td>
    <td rowspan="5" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="74">&nbsp;</td>
    <td align="center" valign="middle" id="td"><div align="center"><span class="style10">Sign Up</span></div></td>
  <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="395"></td>
    <td valign="top"><form action="signup2.php" method="post" name="form1" onsubmit="return check()">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="200" height="30" valign="middle" class="style16" id="td"><div align="center" class="style17">Username : </div></td>
            <td width="200" align="center" valign="middle" id="td"><input type="text" name="username" /></td>
          </tr>
        <tr>
          <td height="30" align="center" valign="middle" class="style18" id="td"><div align="center">Password : </div></td>
            <td align="center" valign="middle" id="td"><input type="password" name="password" /></td>
          </tr>
        <tr>
          <td height="30" valign="top" id="td"><div align="center" class="style18">Confirm Password : </div></td>
            <td align="center" valign="middle" id="td"><input type="password" name="confirmpassword" /></td>
          </tr>
        <tr>
          <td height="30" valign="middle" id="td"><div align="center" class="style18">Firstname : </div></td>
            <td align="center" valign="middle" id="td"><input type="text" name="firstname" /></td>
          </tr>
        <tr>
          <td height="30" valign="middle" class="style18" id="td"><div align="center">Lastname : </div></td>
            <td align="center" valign="middle" id="td"><input type="text" name="lastname" /></td>
          </tr>
        <tr>
          <td height="30" valign="middle" class="style18" id="td"><div align="center">E-mail : </div></td>
            <td align="center" valign="middle" id="td"><input type="text" name="email" /></td>
          </tr>
        <tr>
          <td height="35" valign="middle" class="style18" id="td"><div align="center">Address : </div></td>
            <td align="center" valign="top" id="td"><textarea rows="2" cols="20" name="address"></textarea></td>
          </tr>
        <tr>
          <td height="30" valign="middle" class="style18" id="td"><div align="center">City : </div></td>
            <td align="center" valign="middle" id="td"><input type="text" name="city" /></td>
          </tr>
        <tr>
          <td height="30" valign="middle" class="style18" id="td"><div align="center">Gender : </div></td>
            <td align="center" valign="middle" id="td"><input type="radio" name="gender" value="male" /><b class="style18">Male</b><input type="radio" name="gender" value="female" /><b class="style18">Female</b></td>
          </tr>
        <tr>
          <td height="30" valign="middle" class="style18" id="td"><div align="center">Date Of Birth : </div></td>
            <td align="center" valign="middle" id="td"><input type="text" name="dateofbirth" placeholder="DD/MM/YYYY"/></td>
          </tr>
        <tr>
          <td height="30" valign="middle" id="td"><div align="center" class="style18">Phone : </div></td>
            <td align="center" valign="middle" id="td"><input type="text" name="phone" /></td>
          </tr>
        <tr>
          <td height="60" colspan="2" align="center" valign="middle" id="td"><input type="submit" name="submit" value="Sign Up" /></td>
          </tr>
        </table>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="62"></td>
    <td></td>
    <td></td>
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
