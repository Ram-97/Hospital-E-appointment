<?php
$con=mysqli_connect("localhost","root","","hseapp");
if($con==false)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
$sql=mysqli_query($con,"SELECT * FROM doctor");

echo '<html><head><title>Data</title>
             <link rel="icon" href="http://www.clker.com/cliparts/i/W/D/y/C/w/critical-data-hi.png">
             </head><body bgcolor="#bfc2c2"><center>
             <h2>Doctor Database</h2>
             <table cellpadding="15" ><tr style="background:#ffa928"><th>ID</th><th>Name</th><th>Qualification</th> <th>Specialist</th><th>Password</th><th>Delete</th></tr>';
while($row = mysqli_fetch_array($sql))
{
echo '<tr style="background:#deff8c">';
echo "<td>".$row['PersonID']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['qualification']."</td>";
echo "<td>".$row['specialist']."</td>";
echo "<td>".$row['password']."</td>";
echo '<td><a href="dropdoc.php" style="text-decoration:none;">Delete</a></td>';
echo "</tr>";
}
echo "</center><br/>";
echo '<tr><td colspan="6"><a href="welcome.html" style="color:green; text-decoration:none; font-size:14pt; float:right;">Back</a></td></tr></table></body></html>';
mysqli_close($con);
?>
