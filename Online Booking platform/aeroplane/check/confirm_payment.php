<?php
// Database connection details
$servername = "localhost"; // Database host
$username = "root";        // Database username
$password = "";            // Database password
$dbname = "customer";      // Database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data from POST request
$customer_name = $_POST['customer-name'];
$customer_email = $_POST['customer-email'];
$customer_phone = $_POST['customer-phone'];
$flight_from = $_POST['flight-from'];
$flight_to = $_POST['flight-to'];
$flight_time = $_POST['flight-time'];
$flight_duration = $_POST['flight-duration'];
$flight_price = $_POST['flight-price'];
$card_number = $_POST['card-number'];  // You should ideally avoid storing sensitive data like this
$expiry_date = $_POST['expiry-date'];
$cvv = $_POST['cvv'];  // Same for CVV

// Prepare SQL query to insert the booking details into the database
$sql = "INSERT INTO flight_bookings 
        (customer_name, customer_email, customer_phone, flight_from, flight_to, flight_time, flight_duration, flight_price, card_number, expiry_date, cvv)
        VALUES ('$customer_name', '$customer_email', '$customer_phone', '$flight_from', '$flight_to', '$flight_time', '$flight_duration', '$flight_price', '$card_number', '$expiry_date', '$cvv')";

// Execute the SQL query and check for success
if ($conn->query($sql) === TRUE) {
    echo "Booking successful! Your payment is confirmed.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
