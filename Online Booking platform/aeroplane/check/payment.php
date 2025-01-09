<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        /* (Styling omitted for brevity) */
/* Reset and basic styling */
* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-image: url("bg5.webp");
            background-size: cover;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
            min-height: 100vh; 
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }

        .content-container {
            width: 100%;
            max-width: 600px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
            margin-bottom: 20px;
        }

        h2 {
            color: #4a90e2;
            margin-top: 15px;
        }

        p.instructions {
            color: #555;
            font-size: 16px;
            margin-bottom: 20px;
        }

        #payment-details p, #payment-form label {
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button[type="button"] {
            width: 100%;
            padding: 12px;
            background-color: #4a90e2;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="button"]:hover {
            background-color: #357ABD;
        }
        h1{
            color: black;
            margin-top: 30px;
        }



    </style>
</head>
<body>
    <h1>Payment Details</h1>
    
    <div class="content-container">
        <div id="payment-details"></div>
    </div>

    <div class="content-container">
        <h2>Card Details</h2>
        <form id="payment-form" action="confirm_payment.php" method="POST">
            <label for="card-number">Card Number:</label>
            <input type="text" id="card-number" name="card-number" required maxlength="16" minlength="16"><br>

            <label for="expiry-date">Expiry Date:</label>
            <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required pattern="^(0[1-9]|1[0-2])\/?([0-9]{2})$"><br>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required maxlength="3" minlength="3"><br>

            <!-- Hidden fields to pass flight and customer info to backend -->
            <input type="hidden" id="customer-name" name="customer-name">
            <input type="hidden" id="customer-email" name="customer-email">
            <input type="hidden" id="customer-phone" name="customer-phone">
            <input type="hidden" id="flight-from" name="flight-from">
            <input type="hidden" id="flight-to" name="flight-to">
            <input type="hidden" id="flight-time" name="flight-time">
            <input type="hidden" id="flight-duration" name="flight-duration">
            <input type="hidden" id="flight-price" name="flight-price">

            <button type="submit">Confirm Payment</button>
        </form>
    </div>

    <script>
        const urlParams = new URLSearchParams(window.location.search);

        const customerName = urlParams.get("name");
        const customerEmail = urlParams.get("email");
        const customerPhone = urlParams.get("phone");
        const flightFrom = urlParams.get("from");
        const flightTo = urlParams.get("to");
        const flightTime = urlParams.get("time");
        const flightDuration = urlParams.get("duration");
        const flightPrice = urlParams.get("price");

        // Display customer and flight details on the page
        const paymentDetails = document.getElementById("payment-details");
        paymentDetails.innerHTML = `
            <h2>Customer Information</h2>
            <p>Name: ${customerName}</p>
            <p>Email: ${customerEmail}</p>
            <p>Phone: ${customerPhone}</p>
            <h2>Flight Details</h2>
            <p>From: ${flightFrom}</p>
            <p>To: ${flightTo}</p>
            <p>Time: ${flightTime}</p>
            <p>Duration: ${flightDuration}</p>
            <p>Price: ${flightPrice}</p>
        `;

        // Set hidden fields to be sent with the form
        document.getElementById("customer-name").value = customerName;
        document.getElementById("customer-email").value = customerEmail;
        document.getElementById("customer-phone").value = customerPhone;
        document.getElementById("flight-from").value = flightFrom;
        document.getElementById("flight-to").value = flightTo;
        document.getElementById("flight-time").value = flightTime;
        document.getElementById("flight-duration").value = flightDuration;
        document.getElementById("flight-price").value = flightPrice;
    </script>
</body>
</html>
