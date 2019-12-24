<?php
$con=mysqli_connect("localhost","root","","hseapp");
if($con==false)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
$sql=mysqli_query($con,"SELECT * FROM confirm");

echo '<html><head><title>Data</title>
             <link rel="icon" href="http://www.clker.com/cliparts/i/W/D/y/C/w/critical-data-hi.png">
             </head><body bgcolor="#bfc2c2"><center>
             <h2>Confirmed Appointments</h2>
             <table cellpadding="15" ><tr style="background:#ffa928">
<th>ID</th><th>Patient Name</th><th>Age</th><th>Date</th> <th> Timing</th><th>Selected Doctor</th><th>Form sent by</th><th>Status</th>';
while($row = mysqli_fetch_array($sql))
{
echo '<tr style="background:#deff8c">';
echo "<td>".$row['ID']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['age']."</td>";
echo "<td>".$row['date']."</td>";
echo "<td>".$row['time']."</td>";
echo "<td>".$row['doctor']."</td>";
echo "<td>".$row['user']."</td>";
echo "<td>".$row['confirm']."</td>";
echo "</tr>";
}
echo '<tr><td colspan="8"><a href="welcome.html" style="float:right; color:green; font-size:14pt; float:right">Back</a></td></tr></table>';
mysqli_close($con);
?>
