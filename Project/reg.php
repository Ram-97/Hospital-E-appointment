<?php
$con=mysqli_connect("localhost","root","","hseapp");
if($con==false)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
extract($_POST);
$pn=$_POST['username'];
$gender=$_POST['gender'];
$maritalstatus=$_POST['maritalstatus'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$password=$_POST['password'];
$secret=$_POST['secret'];

if($cpswd==$password)
{
$sql="INSERT INTO patient(username,gender,maritalstatus,address,mobile,email,country,state,city,pincode,secret,password) VALUES ('$pn','$gender','$maritalstatus','$address','$mobile','$email','$country','$state','$city','$pincode','$secret','$password')";
$sql1="INSERT INTO login(username,password) VALUES ('$pn','$password')";
if(!mysqli_query($con,$sql1))
{
echo"Error:Could not able to execute $sql".mysqli_error($con);
}

if(!mysqli_query($con,$sql))
{
echo"Error:Could not able to execute $sql".mysqli_error($con);
}
else
{
header("refresh:2 url=index.html");
}
mysqli_close($con);
}

else
{
        header("refresh:2 url=error.html");
 
}



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
