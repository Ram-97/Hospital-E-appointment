<?php
$con=mysqli_connect("localhost","root","","hseapp");
if($con==false)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
$sql=mysqli_query($con,"SELECT PersonID,username,specialist FROM doctor");

echo '<table border="1" ><tr><th>ID</th><th>Name</th><th>Specialist </th></tr>';
while($row = mysqli_fetch_array($sql))
{
echo "<tr>";
echo "<td>".$row['PersonID']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['specialist']."</td>";

echo "</tr>";
}
echo "</table>";
echo '<a href="welcome.html" style="float:right; color:green; font-size:14pt;">Back</a>';
mysqli_close($con);
?>
