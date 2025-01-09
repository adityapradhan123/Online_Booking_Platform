<?php
include 'database.php';
if(isset($_POST['submit']))
{
$Name=$_POST['uname'];
$phone=$_POST['uphone'];
$Date=$_POST['tdate'];
$When=$_POST['time'];
$Pickup_location=$_POST['plocation'];
$Drop_location=$_POST['dlocation'];
$sql="insert into costumer(Name,phone,Date,When,Pickup_location,Drop_location) values('$Name','$phone','$Date','$When','$Pickup_location','$Drop_location')";
if(mysqli_query($con,$sql))
{
echo"<script>alert('Inserted Succesfully')</script>";
}
else
{
echo "error:".mysqli_error($con);
}
mysqli_close($con);
}
?>