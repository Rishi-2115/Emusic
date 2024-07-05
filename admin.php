<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator Account</title>
<style type="text/css">
<!--
body {
	background-image: url(images/black.jpeg);
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
#td
{
	background: rgba(100, 100, 100, 0);
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
.style1 {
	font-size: 18px;
	font-weight: bold;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.style2 {
	font-size: 42px;
	font-weight: bold;
	color:#A020F0;
}
-->
</style>
<script type="text/javascript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body onload="MM_preloadImages('images/pm4.jpg','images/play.png','images/sc2.jpg')">
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="80" colspan="8" valign="top"><img src="images/newbanner.jpg" width="1024" height="150" /></td>
  </tr>
  <tr>
    <td width="5" height="13"></td>
    <td width="257"></td>
    <td width="120"></td>
    <td width="260"></td>
    <td width="120"></td>
    <td width="177"></td>
    <td width="80"></td>
    <td width="5"></td>
  </tr>
  <tr>
    <td rowspan="7" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="80" colspan="6" valign="top"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','1014','height','80','src','images/bar2','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','images/bar2' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="1014" height="80">
      <param name="movie" value="images/bar2.swf" />
      <param name="quality" value="high" />
      <embed src="images/bar2.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="1014" height="80"></embed>
    </object></noscript></td>
    <td rowspan="6" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="30"></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td align="center" valign="middle"><a href="signout.php" target="_self"><span class="style1">Sign Out</span></a><span class="style1"></span></td>
  </tr>
  <tr>
    <td height="100"></td>
    <td colspan="3" align="center" valign="middle" class="style2" id="td">Administrator Account</td>
    <td></td>
    <td></td>
  </tr>
  
  
  <tr>
    <td height="182">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="60"></td>
    <td valign="top"><a href="adminmusic.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/play.png',1)"><img src="images/newmu.jpg" name="Image4" width="150" height="80" border="0" id="Image4" /></a></td>
    <td>&nbsp;</td>
    <td valign="top"><a href="shopingcentre.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/cart.png',1)"><img src="images/shopping.png" name="Image3" width="150" height="80" border="0" id="Image3" /></a></td>
    <td></td>
    <td></td>
  </tr>
  
  
  
  <tr>
    <td height="194">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="14"></td>
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
