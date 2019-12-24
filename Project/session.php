<?php

include('Config.php');
session_start();

$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($db,"select username from login where username='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session=$row['username'];

$ses_sql1=mysqli_query($db,"select username from doctor where username='$user_check'");
$row1=mysqli_fetch_array($ses_sql1,MYSQLI_ASSOC);
$login_session1=$row1['username'];

if(!isset($_SESSION['login_user'])){
header("location:index.html");
}

?>