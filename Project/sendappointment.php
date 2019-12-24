<?php
include('session.php');
$con=mysqli_connect("localhost","root","","hseapp");
if($con==false)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
extract($_POST);
$name=$_POST['name'];
$age=$_POST['age'];
$date=$_POST['date'];
$time=$_POST['time'];
$selectdoc=$_POST['selectdoc'];

$sql="INSERT INTO appointment(name,age,date,time,selectdoc,user) VALUES ('$name','$age','$date','$time','$selectdoc','$login_session')";

if(!mysqli_query($con,$sql))
{
echo"Error:Could not able to execute $sql".mysqli_error($con);
}
else
{
echo '<script>alert("submitted successfully");</script>';
header("refresh:2 url=welcomepatient.php");
}
mysqli_close($con);
?>
<html>
<head>
<style>
img
{
    position:absolute;
	top: 155px;
    right: 423px;
}
</style>
</head>
<body>
<img src="https://media1.tenor.com/images/db85ba00c6073b451a8f05156a66524e/tenor.gif?itemid=9856796" alt="loading" />
</body>
</html>
