<?php
include('session.php');
$con=mysqli_connect("localhost","root","","hseapp");
if($con==false)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
$sql=mysqli_query($con,"SELECT * FROM patient WHERE username='$login_session'");
while($row=mysqli_fetch_array($sql)) {
			$pswd=$row['password'];
			$id=$row['PersonID'];
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


if($password==$pswd)
{

$sql1="UPDATE patient SET username='$pn',gender='$gender',maritalstatus='$maritalstatus',address='$address',mobile='$mobile',email='$email',country='$country',state='$state',city='$city',pincode='$pincode',secret='$secret' WHERE PersonID='$id'  ";
$sql2="UPDATE login SET username='$pn' WHERE PersonID='$id'";

if(!mysqli_query($con,$sql1))
{
echo"Error:Could not able to execute $sql".mysqli_error($con);
}

if(!mysqli_query($con,$sql2))
{
echo"Error:Could not able to execute $sql".mysqli_error($con);
}
else
{
echo '<script>alert("Updated successfully Please Login Again");</script>';
header("refresh:2 url=Logout.php");
}

}

else
{
	echo '<script>alert("Password not matched");</script>';
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
