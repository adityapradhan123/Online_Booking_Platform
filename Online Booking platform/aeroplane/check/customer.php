<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Information</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        .section-margin {
            margin-bottom: 30px; /* 30px margin for customer info and flight details */
        }

        
        body {
            background-image :url("bg5.webp");
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        
        

        h1 {
            color: #110d0d;
            margin-bottom: 30px;
        }

        form {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4a90e2;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #357ABD;
        }
    </style>
</head>
<body>
    <h1>Enter Customer Details</h1>
    <form id="customer-form" onsubmit="goToPayment(event)">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <button type="submit">Proceed to Payment</button>
    </form>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const flightDetails = {
            from: urlParams.get("from"),
            to: urlParams.get("to"),
            time: urlParams.get("time"),
            duration: urlParams.get("duration"),
            price: urlParams.get("price")
        };

        function goToPayment(event) {
            event.preventDefault();

            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const phone = document.getElementById("phone").value;

            const customerDetails = new URLSearchParams({
                name,
                email,
                phone,
                ...flightDetails
            });

            window.location.href = `payment.php?${customerDetails.toString()}`;
        }
    </script>
</body>
</html>
