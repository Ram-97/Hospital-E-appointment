<?php
include("admindoc.php");
$con=mysqli_connect("localhost","root","","hseapp");
if($con==false)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
$sql="DELETE FROM doctor WHERE PersonID=.$row['PersonID'].";
if(!mysqli_query($con,$sql))/
{
echo"Error:Could not able to execute $sql".mysqli_error($con);
}
else
{

echo '<script>alert("Removed!!!");</script>';
header("Location=hseapp/valueadmindoc.php");
}
?>