<?php
include("Config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){

$myusername=mysqli_real_escape_string($db,$_POST['username']);
$mypassword=mysqli_real_escape_string($db,$_POST['password']);

$sql="SELECT PersonID FROM admin WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

$count=mysqli_num_rows($result);

$sql1="SELECT PersonID FROM login WHERE username='$myusername' and password='$mypassword'";
$result1=mysqli_query($db,$sql1);
$row1=mysqli_fetch_array($result1,MYSQLI_ASSOC);

$count1=mysqli_num_rows($result1);

$sql2="SELECT PersonID FROM doctor WHERE username='$myusername' and password='$mypassword'";
$result2=mysqli_query($db,$sql2);
$row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);

$count2=mysqli_num_rows($result2);

if($count==1){
$_SESSION['login_user']=$myusername;
header("location:welcome.html");
}else if($count1==1){
$_SESSION['login_user']=$myusername;
header("location:welcomepatient.php");
}else if($count2==1){
$_SESSION['login_user']=$myusername;
header("location:welcomedoctor.php");
}
else{
header("location:error.html");

}
}

?>