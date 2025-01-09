<?php
include 'database.php';
if(isset($_POST['Submit']))
{
    $name=$_POST['uname'];
    $number=$_POST['uphone'];
    $date=$_POST['tdate'];
    $when=$_POST['time'];
    $pick_location=$_POST['plocation'];
    $drop_location=$_POST['dlocation'];
    $chk="";
    foreach ($drop_location as $chk1)
    {
    $chk.=$chk1.",";
    }
    $sql="insert into costumer(Name,phone,Date,When,Pickup_location,Drop_Location)
    values('$Name','$phone','$Date','$When','$Pickup_location','$chk')";
    if(musqli_query($con,$sql))
    {
        echo "<script> alert('new record inserted')</script>";
    }
        else
        {
         echo "error:".mysqli_error($con);
        }
        mysqli_close($con);
    }
    ?>
