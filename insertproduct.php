<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Product</title>
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

#table
{
	background-color:rgba(0,0,0,0.2);
}
input[type="submit"]  {
    background-color: rgba(0,204,0, 0.7);
    border: none;
    color: black;
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
	color: purple;
}
.style3 {
	color: #0000FF;
	font-weight: bold;
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

<script language="javascript">
function check()
{
	if(document.form1.instrumentname.value=="")
	{
		alert("Please enter Instrument Name");
		document.form1.instrumentname.focus();
		return false;
	}
	
	if(document.form1.instrumentprice.value=="")
	{
		alert("Please enter Instrument Price");
		document.form1.instrumentprice.focus();
		return false;
	}
	
	if(document.form1.feature1.value=="")
	{
		alert("Please enter Feature1");
		document.form1.feature1.focus();
		return false;
	}
	
	if(document.form1.feature2.value=="")
	{
		alert("Please enter Feature2");
		document.form1.feature2.focus();
		return false;
	}
	
	if(document.form1.feature3.value=="")
	{
		alert("Please enter Feature3");
		document.form1.feature3.focus();
		return false;
	}
	
	if(document.form1.feature4.value=="")
	{
		alert("Please enter Feature4");
		document.form1.feature4.focus();
		return false;
	}
	
	if(document.form1.productdescription.value=="")
	{
		alert("Please enter Product Description");
		document.form1.productdescription.focus();
		return false;
	}
	
	if(document.form1.brand.value=="")
	{
		alert("Please enter Brand");
		document.form1.brand.focus();
		return false;
	}
	
	if(document.form1.weight.value=="")
	{
		alert("Please enter Weight in Kilogram (Kg)");
		document.form1.weight.focus();
		return false;
	}
	
	
	if(document.form1.productdimensions.value=="")
	{
		alert("Please enter Product Dimension\n Format : Width x Height cm/m/inch");
		document.form1.productdimensions.focus();
		return false;
	}
	
	return true;
}
//-->
</script>

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body bgcolor="ccd2d0">
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td height="80" colspan="10" valign="top"><img src="images/newbanner.jpg" width="1024" height="150" /></td>
  </tr>
  <tr>
    <td width="5" height="13"></td>
    <td width="99"></td>
    <td width="158"></td>
    <td width="500"></td>
    <td width="94"></td>
    <td width="48"></td>
    <td width="25"></td>
    <td width="10"></td>
    <td width="80"></td>
    <td width="5"></td>
  </tr>
  <tr>
    <td rowspan="7" valign="top" bgcolor="#d1d5d6"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="80" colspan="8" valign="top"><script type="text/javascript">
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
    <td>&nbsp;</td>
    <td colspan="2" align="right" valign="middle"><span class="style1"><a href="admin.php">Home</a></span></td>
    <td align="center" valign="middle"><span class="style3">|</span></td>
    <td align="center" valign="middle"><a href="signout.php" target="_self"><span class="style1">Sign Out</span></a><span class="style1"></span></td>
  </tr>
  <tr>
    <td height="100"></td>
    <td></td>
    <td align="center" valign="middle" class="style2" id="td">Administrator Account</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  
  <tr>
    <td height="509">&nbsp;</td>
    <td colspan="4" align="center" valign="top">
      <form name="form1" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="return check()" enctype="multipart/form-data">
        <table id="table" cellspacing="10" border="0">
          <tr><td><b><font color='purple'>Instrument Name : </font></b></td><td><input type="text" name="instrumentname" /></td></tr> 
          <tr><td><b><font color='purple'>Instrument Price : </font></b></td><td><input type="text" name="instrumentprice" /></td></tr>
          <tr><td><b><font color='purple'>Feature1 : </font></b></td><td><input type="text" name="feature1" /></td></tr>
          <tr><td><b><font color'purple'>Feature2 : </font></b></td><td><input type="text" name="feature2" /></td></tr>
          <tr><td><b><font color='purple'>Feature3 : </font></b></td><td><input type="text" name="feature3" /></td></tr>
          <tr><td><b><font color='purple'>Feature4 : </font></b></td><td><input type="text" name="feature4" /></td></tr>
          <tr><td><b><font color='purple'>Product Description : </font></b></td><td><textarea name="productdescription" rows="5" cols="20"></textarea></td></tr>
          <tr><td><b><font color='purple'>Brand : </font></b></td><td><input type="text" name="brand" /></td></tr>
          <tr><td><b><font color='purple'>Weight (Kg) : </font></b></td><td><input type="text" name="weight" /></td></tr>
          <tr><td><b><font color='purple'>Product Dimensions (W x H cm) : </font></b></td><td><input type="text" name="productdimensions" /></td></tr>
          <tr><td><b><font color='purple'>Product Image : </font></b></td><td><input type="file" name="file" /></td></tr>
          <tr><td colspan="2" align="center"><input type="submit" name="submit" value="Insert" /></td></tr>
        </table>
	    </form>        </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td colspan="4" align="center" valign="top">
    <?php
	if(isset($_POST['submit']))
	{
		include("database.php");
    	$instrumentname=$_POST['instrumentname'];
		$instrumentprice=$_POST['instrumentprice'];
		$feature1=$_POST['feature1'];
		$feature2=$_POST['feature2'];
		$feature3=$_POST['feature3'];
		$feature4=$_POST['feature4'];
		$productdescription=$_POST['productdescription'];
		$brand=$_POST['brand'];
		$weight=$_POST['weight'];
		$productdimensions=$_POST['productdimensions'];
		$location=$_FILES['file']['name'];
		$image=addslashes(file_get_contents($_FILES['file']['tmp_name']));
	
		$insert=mysqli_query($con,"insert into instrument 
	                           (instrumentname,location,instrumentprice,image,feature1,feature2,feature3,feature4,productdescription,brand,weight,productdimension) 
values('{$instrumentname}','{$location}','{$instrumentprice}','{$image}','{$feature1}','{$feature2}','{$feature3}','{$feature4}','{$productdescription}','{$brand}',{$weight},'{$productdimensions}')");

		if($insert)
		{
		/*echo "<script type='text/javascript'>  alert('Product Successfully Inserted\nPlease Copy the Image file of same name to 'instrumentimages' folder') </script>";*/
			
			echo "<script>";
			echo 'alert("Product Successfully Inserted\n Please Copy the Image file of same name to instrumentimages/ folder")';
			echo "</script>";
			//echo "<h2><font color=#AA2D5F>Product Successfully Inserted</font></h2>";
		}
		else
		{
			echo "<h2><font color=#AA2D5F>Product not Inserted</font></h2>";
		}
	}
	?>    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="60">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td></td>
    <td></td>
  </tr>
</table>
</body>
</html>