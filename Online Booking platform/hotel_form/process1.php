<?php
include 'database.php';
if(isset($_POST['submit']))
{
$First_name=$_POST['first'];
$Last_name=$_POST['last'];
$phone=$_POST['phone'];
$Email=$_POST['email'];
$Departure_Date=$_POST['Departure'];
$Arrival_Date=$_POST['arrival'];
$No_of_Guest=$_POST['Guest'];
$Room_type=$_POST['room'];
$sql="insert into hotel(First_name,Last_name,phone,Email,Departure_Date,Arrival_Date,No_of_Guest,Room_type) values('$First_name','$Last_name','$phone','$Email','$Departure_Date','$Arrival_Date','$No_of_Guest','$Room_type')";
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