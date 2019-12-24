<?php
include('session.php');
$con=mysqli_connect("localhost","root","","hseapp");
if($con==false)
{
 die("ERROR:Could not connect.".mysqli_connect_error());
}
$sql=mysqli_query($con,"SELECT * FROM doctor");
?>
<html>
<head>
<title>Patient</title>
<link rel="stylesheet" href="reg.css">
<link rel="icon" href="https://openclipart.org/image/2400px/svg_to_png/216807/1428136341.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body>
<nav>
	<section class="nav-container"></section>
	<aside style="color:white; font-weight:bold;">Welcome <?php echo $login_session; ?>
		<?php
		echo "Date:" . date("d-m-y") ;
		?>
	
		<button onclick="window.location='Logout.php';" >logout</button> 
			<button id="notification">Notification</button>

	</aside>
</nav>
<br/>
<aside class="left">  
<a href="#" class="ahref">Appointment Form</a>
<br/><hr/>
<button id="profile" class="b1">Update Profile</button>
<br/><hr/>
</aside>
<div class="video">
        <video width="450" height="340" controls >
        <source src="ad.mp4" type="video/mp4"/>
        </video>
</div>
<div class="sendappointment">
<form method="POST" action="sendappointment.php">
<table>
<tr>
        <td><label>  Patient Name:   </label></td>
	<td><input type="text" name="name"  class="pm" required/></td>
</tr>
<tr>
	<td><label>  Age:   </label></td>
	<td><input type="number" name="age" required/></td>
</tr>
<tr>
	<td><label> Appointment Date: </label></td>
	<td><input type="date" name="date"  required/></td>
</tr>
<tr>
	<td><label>    Time: </label></td>
	<td><select name="time">
	<option value="10AM-11AM">10AM-11AM</option>
	<option value="11AM-12PM">11AM-12PM</option>
	<option value="1PM-2PM">1PM-2PM</option>
	<option value="2PM-3PM">2PM-3PM</option>
	<option value="3PM-4PM">3PM-4PM</option>
	</select>
        </td>
</tr>
<tr>
<td> <label>Get Appointment From</label> </td>
<td> <select name="selectdoc">
			<?php
			while($row=mysqli_fetch_array($sql)) {
			echo "<option value=".$row['username'].">Dr.".$row['username']."-".$row['specialist']."</option>";
			}     	
			?>
			</select>
</td>
	
</tr>
<tr>
	<td colspan="2">
        <input type="submit" name="select" value="Submit" class="sub"/>
        </td>
</tr>
</table>
</form>
</div>
<div   class="arrow-up"></div>
<div  class="notification">
<table>
<tr>
<b><center style="color:red"><label>Notification</label> </center></b>
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


<div class="edit-form">
<?php
$sql2=mysqli_query($con,"SELECT * FROM patient WHERE username='$login_session'");
?>
<form method="POST" action="updateprofile.php" style="margin-left:50px; margin-right:50px">
<div align="center"><i class="fa fa-user"></i>Update Profile Details!!</div>
<div class="close"><a href="#" style="text-decoration:none" id="close"> &#x274E</a></div>
<table cellspacing="16px" width="90%">
<tr><td>
<label>Username:</label></td>
<td><input type="text"  name="username"  class="pm" value="<?php while($row=mysqli_fetch_array($sql2)) { echo $row['username'];?>" required/>
</td>
</tr>

<tr>
<td><label> Gender :</label></td> 
<td><label>Marital Status :</label></td>
</tr>

<tr><td>
<select name="gender"  >
		 <option value="<?php echo $row['gender'];?>"selected="selected"><?php echo $row['gender'];?>-selected</option>
         <option value="Male" >Male</option>
         <option value="Female">Female</option>
      </select>
</td><td>
      <select name="maritalstatus" >
         <option value="<?php echo $row['maritalstatus'];?>"selected="selected"><?php echo $row['maritalstatus'];?>-selected</option>
         <option value="Married">Married</option>
         <option value="Unmarried" >Unmarried</option>
      </select>
</td>
</tr>

<tr><td>	  
<label>Address :</label></td>
<td><textarea name="address" rows="3" cols="40"  class="pm1" ><?php echo $row['address'];?></textarea></td>
 </tr>
 
 <tr><td>
 <label>Mobile :</label> </td>
  <td>  <input type="text" name="mobile" size="15" class="pm" value="<?php echo $row['mobile'];?>" required/></td>
  </tr>

<tr>  
 <td> <label>Email :</label>  </td> 
  <td> <input type="email" name="email" size="38" class="pm" value="<?php echo $row['email'];?>" required/> </td>
</tr>

<tr><td>
  <label> Country :</label></td> 
 <td> <label>State :</label> </td>
 </tr>
 
 <tr><td>
 <select name="country">
	<option value="India" selected="selected">India</option>
</select></td>
<td>
<select name="state" >
<option value="<?php echo $row['state'];?>"selected="selected"><?php echo $row['state'];?>-selected</option>
    <option value="AndharaPradesh">AndharaPradesh</option>
	<option value="ArunachalaPradesh">ArunachalaPradesh</option>
	<option value="Assam">Assam</option>
	<option value="Bihar">Bihar</option>
	<option value="Chhatisgarh">Chhatisgarh</option>
	<option value="Goa">Goa</option>
	<option value="Gujarat">Gujarat</option>
	<option value="Haryana">Haryana</option>
	<option value="HimachalPradesh">HimachalPradesh</option>
	<option value="Jammu&Kashmir">Jammu&Kashmir</option>
	<option value="Jharkhand">Jharkhand</option>
	<option value="Karnataka">Karnataka</option>
	<option value="Kerala">Kerala</option>
	<option value="MadhyaPradesh">MadhyaPradesh</option>
	<option value="Maharashtra">Maharashtra</option>
	<option value="Manipur">Manipur</option>
	<option value="Meghalaya">Meghalaya</option>
	<option value="Mizoram">Mizoram</option>
	<option value="Nagaland">Nagaland</option>
	<option value="Odisha">Odisha</option>
	<option value="Punjab">Punjab</option>
	<option value="Rajasthan">Rajasthan</option>
	<option value="Sikkim">Sikkim</option>
	<option value="Tamilnadu">Tamilnadu</option>
	<option value="Telangana">Telangana</option>
	<option value="Tripura">Tripura</option>
	<option value="Uttarpradesh">Uttarpradesh</option>
	<option value="WestBengal">WestBengal</option>
</select>
</td>
</tr>
 
  <tr>
  <td><label>City Name :</label></td>
  <td><label>Pincode :</label></td>
  </tr>
  
  <tr><td>  
<input type="text" name="city" size="38" class="pm" value="<?php echo $row['city'];?>" required/></td>
<td><input type="text" name="pincode" size="15" class="pm" value="<?php echo $row['pincode'];?>"required/></td>
</tr>

<tr><td>
<label>Security  &nbsp; Question: <br/> What  &nbsp; is  &nbsp; your &nbsp; birth  &nbsp; place?</label> </td>
<td>     <input type="text" name="secret" class="pm" value="<?php echo $row['secret'];}?>"required/>  </td>
</tr>

 <tr><td><label>Confirm changes
 <br/>Enter your Password :</label></td>
 <td><input type="password" name="password" size="38" class="pm" required/></td>
 </tr>
 
 <tr ><td colspan="2">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Update" class="sub" /></td> 
  </tr>
 
 </table>
 </form>
</div>

<?php include('C:\xampp\htdocs\hseapp\footer.html');?>

<script type="text/javascript"> 
$(document).ready(function(){
	var form=$(".edit-form");
	var status=false;
	$("#profile").click(function(event){
	event.preventDefault();
	if(status== false)
	{
	form.fadeIn();
	status=true;
	}
	else
	{
	form.fadeOut();
	status=false;
	}
	})
	$("#close").click(function(event){
	event.preventDefault();
	if(status== true)
	{
	form.fadeOut();
	status=true;
	}
	})
	
	})
	
$(document).ready(function(){
	var form=$(".notification");
	var arrow=$(".arrow-up");
	var status=false;
	$("#notification").click(function(event){
	event.preventDefault();
	if(status== false)
	{
	form.fadeOut();
	arrow.fadeOut();
	status=true;
	}
	else
	{
	form.fadeIn();
	arrow.fadeIn();
	status=false;
	}
	})
	})	
</script>


</body>
</html>