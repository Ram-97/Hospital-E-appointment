<?php
$con=mysqli_connect("localhost","root","","hseapp");
if($con==false)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
extract($_POST);
$name=$_POST['username'];
$quali=$_POST['qualification'];
$specialist=$_POST['specialist'];
$password=$_POST['password'];

$sql="INSERT INTO doctor(username,qualification,specialist,password) VALUES ('$name','$quali','$specialist','$password')";
if(!mysqli_query($con,$sql))
{
echo"Error:Could not able to execute $sql".mysqli_error($con);
}
else
{
	echo '<script> alert("Added Successfully");</script>';
header("Location:/hseapp/welcome.html");
}
mysqli_close($con);


?>
