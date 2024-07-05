<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $code= $_GET['packagecode'];
    $db="dbdemo";
    $con=mysqli_connect("localhost","root","",$db);
    $sql="SELECT * FROM package_master where packagecode =".$code."";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
            $code=$row['packagecode'];
            $name=$row['packagename'];
            $days=$row['totaldays'];
            $cost=$row['packagecost'];
            $disc=$row['discount'];
    }
    ?>
    <form method="POST" action="nupdate.php">
        <table border="1">
            <tr>
                <td>packagecode:</td>
                <td><input type="text" name="code" value="<?php echo $code;?>"></td>
            </tr>
            <tr>
                <td>packagename:</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td>packagedays:</td>
                <td><input type="text" name="days" value="<?php echo $days;?>"></td>
            </tr>
            <tr>
                <td>packagecost:</td>
                <td><input type="text" name="cost" value="<?php echo $cost;?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>

            </tr>
        </table>
    </form>
       <?php
       mysqli_close($con);
       ?>

</body>
</html>