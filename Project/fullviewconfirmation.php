<?php

include('session.php');
$con=mysqli_connect("localhost","root","","hseapp");
if($con==false)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
$sql=mysqli_query($con,"SELECT * FROM appointment WHERE selectdoc= '$login_session1'");
echo '<html><link rel="stylesheet" href="reg.css"><body>
<form method="POST" action="confirmappointment.php"><center><h2>Appointment Confirmation</h2>
<table cellpadding="8">
<tr style="background:#ffa928"><th>Select</th><th>Patient name</th><th>Timing</th><th>Date</th></tr>';
$a=array();
			while($row=mysqli_fetch_array($sql)) {
			$a[]=$row['ID'];
			}       
			$arrl=count($a);
			for($x=0;$x<$arrl;$x++)
			  {
			   echo '<tr style="background:#deff8c"><td><input type="checkbox" name="name[]" value="'.$a[$x].'"/></td>';
			  $sql1=mysqli_query($con,"SELECT * FROM appointment WHERE ID= '$a[$x]'");
			  while($row=mysqli_fetch_array($sql1)) {
			  echo '<td>'.$row['name'].'</td><td>'.$row['time'].'</td><td>'.$row['date'].'</td></tr>';
			  }
			  }
			echo '<tr><td colspan="4"><input type="submit" name="cnfrm" value="Accept" class="sub" /></td>';
			echo '<tr><td colspan="4"><a href="welcomedoctor.php" style="text-decoration:none; color:green; font-weight:bold;  float:right; ">Back</a></td></table></center></body></html>';
?>