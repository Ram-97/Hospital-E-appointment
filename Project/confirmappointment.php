<?php
$con=mysqli_connect("localhost","root","","hseapp");
if($con==false)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
extract($_POST);
//$accept=$_POST['name'];
$confirm='confirmed';

if(isset($_POST['cnfrm'])){//to run PHP script on submit
if(!empty($_POST['name'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['name'] as $selected){

$sql="INSERT INTO confirm (name,age,date,time,doctor,user) SELECT name,age,date,time,selectdoc,user from appointment where ID='$selected'" ;
if(!mysqli_query($con,$sql))
{
echo"Error:Could not able to execute $sql".mysqli_error($con);
}
else
{
$sql1="DELETE FROM appointment WHERE ID='$selected'";
if(!mysqli_query($con,$sql1))
{
echo"Error:Could not able to execute $sql1".mysqli_error($con);
}
else
{
header("refresh:2 url=welcomedoctor.php");
}
}

}
}
}
else{
	echo '<script>alert("Nothing Selected")</script>';
	header("refresh:2 url=welcomedoctor.php");
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
