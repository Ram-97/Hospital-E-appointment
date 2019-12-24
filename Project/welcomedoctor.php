<?php
include('session.php');
$con=mysqli_connect("localhost","root","","hseapp");
if($con==false)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
$sql=mysqli_query($con,"SELECT * FROM appointment WHERE selectdoc= '$login_session1'");
?>
<html>
<head>
<title>Doctor Profile</title>
<link rel="stylesheet" href="reg.css">
<link rel="icon" href="http://silhouettesfree.com/professions-and-occupations/doctor/doctor-silhouette-image.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body>
<nav>
	<section class="nav-container"></section>
	<aside style="color:white; font-weight:bold;">Welcome Dr.<?php echo $login_session1; ?>
		<button onclick="window.location='Logout.php';" >logout</button>
	</aside>
</nav>
<br/>
<aside class="left">  
<a href="#" id="edit" style="float:right; color:white; font-size:14pt; text-decoration:none; font-weight:bold;">Appointment Details</a>
<br/><hr/>
<hr/><br/>
</aside>
<div class="sendappointment">
<form method="POST" action="confirmappointment.php">
<label style="color:red; font-weight:bold;">Appointment Confirmation</label>
<a href="fullviewconfirmation.php" > 
<img src="fullview.png" alt="fullview" style="width:20px;height:20px;border:0;float:right;">  </a>
<table cellpadding="8" style="    margin-top: 14px; margin-left: 0px;    width: 100%;">
<tr style="background:#ffa928"><th>Select</th><th>Patient name</th><th>Timing</th><th>Date</th></tr>
		<?php

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
			
		?>
</table>
<table>
<tr>
	<td colspan="2">
        <div style="margin-left:50px;"><input type="submit" name="cnfrm" value="Accept" class="sub" /></div>
        </td>
		<td colspan="2">
        <div style="margin-left:50px;"><input type="submit" name="cnfrm" value="Divert" class="sub" /></div>
        </td>
</tr>
</table>
</form>
</div>

<div class="notification">
<table>
<tr>
<b><center style="color:red"><label>Schedule</label> </center></b>
<hr/>
<td>
			<?php
			$result="SELECT * FROM confirm WHERE user='$login_session'";
			$sql1=mysqli_query($con,$result) or die($result."<br/><br/>".mysql_error());
			while($row=mysqli_fetch_array($sql1)) {
			echo "Appointment dated ".$row['date']." for the patient Mr/Mrs. ".$row['name']." is ".$row['confirm']."<hr/>";
			}        
			?>
</td>
	
</tr>
</table>
</div>
<br/><br/><br/><br/>
<?php include('C:\xampp\htdocs\hseapp\footer.html');?>

</body>
</html>