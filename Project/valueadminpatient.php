<?php
$con=mysqli_connect("localhost","root","","hseapp");
if($con==false)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
$sql=mysqli_query($con,"SELECT * FROM patient");

echo '<html><head><title>Data</title>
             <link rel="icon" href="http://www.clker.com/cliparts/i/W/D/y/C/w/critical-data-hi.png">
             </head><body bgcolor="#bfc2c2"><center>
             <h2>User Database</h2>
             <table cellpadding="15" ><tr style="background:#ffa928"><th>ID</th><th>Name</th><th>Gender</th><th> Marital Status</th> <th> Address</th><th>Mobile </th><th>Email </th><th>Country </th> <th>State </th><th>City </th><th>Pincode </th><th>Secret </th></th><th>Password </th></tr>';
while($row = mysqli_fetch_array($sql))
{
echo '<tr style="background:#deff8c">';
echo "<td>".$row['PersonID']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['maritalstatus']."</td>";
echo "<td>".$row['address']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['country']."</td>";
echo "<td>".$row['state']."</td>";
echo "<td>".$row['city']."</td>";
echo "<td>".$row['pincode']."</td>";
echo "<td>".$row['secret']."</td>";
echo "<td>".$row['password']."</td>";
echo "</tr>";
}
echo "</table>";
echo '<a href="welcome.html" style="float:right; text-decoration:none; color:green; font-size:14pt;">Back</a>';
mysqli_close($con);
?>
