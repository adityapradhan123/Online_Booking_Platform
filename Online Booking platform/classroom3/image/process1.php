<?php
	$Name = $_POST['uname'];
	$phone = $_POST['uphone'];
	$Date = $_POST['tdate'];
	$When = $_POST['time'];
	$Pickup_location = $_POST['plocation'];
	$Drop_location = $_POST['dlocation'];

	// Database connection
	$conn = new mysqli('localhost','root','','costumer');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into costumer(uname, uphone, tdate, time, plocation, dlocation) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $Name, $Phone, $Date, $When, $Pickup_location, $Drop_location);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>