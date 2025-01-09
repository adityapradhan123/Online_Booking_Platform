<?php
include 'database.php';
if (isset($_POST['submit'])) {
    $Name = $_POST['uname'];
    $phone = $_POST['uphone'];
    $Date = $_POST['tdate'];
    $When = $_POST['time'];
    $Pickup_location = $_POST['plocation'];
    $Drop_location = $_POST['dlocation'];

    // Insert query
    $sql = "INSERT INTO costumer(Name, phone, Date, `When`, Pickup_location, Drop_location) 
            VALUES('$Name', '$phone', '$Date', '$When', '$Pickup_location', '$Drop_location')";

    if (mysqli_query($con, $sql)) {
        // Custom alert message with CSS styling
        echo "
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .custom-alert {
                width: 400px;
                padding: 30px;
                background-color: #ffffff;
                border: 2px solid #4CAF50;
                text-align: center;
                box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
                border-radius: 15px;
                animation: fadeIn 0.5s;
            }
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            .custom-alert h2 {
                color: #4CAF50;
                font-size: 26px;
                margin-bottom: 15px;
                font-weight: bold;
            }
            .custom-alert p {
                font-size: 18px;
                color: #555;
                margin-bottom: 20px;
            }
            .custom-alert .redirect-btn {
                margin-top: 10px;
                padding: 12px 25px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 30px;
                cursor: pointer;
                font-size: 18px;
                transition: background-color 0.3s, transform 0.3s;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
            .custom-alert .redirect-btn:hover {
                background-color: #45a049;
                transform: translateY(-2px);
            }
            .custom-alert .redirect-btn:active {
                transform: translateY(0);
            }
            .custom-alert .icon {
                font-size: 50px;
                color: #4CAF50;
                margin-bottom: 15px;
            }
        </style>

        <div class='custom-alert'>
            <div class='icon'><i class='fa-solid fa-check-circle'></i></div>
            <h2>Success!</h2>
            <p>Your data has been submitted successfully.<br>Redirecting to the payment page...</p>
            <button class='redirect-btn' onclick='redirectToPayment()'>Proceed to Payment</button>
        </div>

        <script>
            function redirectToPayment() {
                window.location.href = 'card/card.php'; // Redirect to payment page
            }
            setTimeout(redirectToPayment, 5000); // Auto-redirect after 5 seconds
        </script>";

    } else {
        // Display error
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>
