<?php

if(isset($_GET['id']))
{
include("database.php");
$sql = "SELECT image FROM instrument WHERE id=".$_GET['id'].";";
//$sql = "SELECT image FROM mst_subject WHERE sub_id=8";
$result=mysql_query("$sql");
header("Content-type: image/jpeg");
echo mysql_result($result,0);
mysql_close($con);
}
else 
{
     echo 'Please use a real id number';
 }
?>