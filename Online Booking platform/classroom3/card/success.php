<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Successful</title>
    <link rel="stylesheet" href="success.css">
    <link href="https://kit.fontawesome.com/e8fa2e31b4.js" crossorigin="anonymous">
    <style>
        /* Style for the success icon and animation */
        .icon {
            text-align: center;
            font-size: 5rem;
            color: green;
            animation: scaleUp 1s ease-in-out forwards;
            opacity: 0;
        }

        /* Animation for the success tick */
        @keyframes scaleUp {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.8;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Animation for the success message */
        .success-container {
            text-align: center;
            padding: 50px;
            background-color: #f4f4f4;
            border-radius: 10px;
            max-width: 600px;
            margin: 0 auto;
            animation: fadeIn 0.5s ease-out forwards;
            opacity: 0;
        }

        /* Fade-in effect for the success container */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-size: 2rem;
            color: #333;
        }

        .details p {
            font-size: 1rem;
            color: #555;
        }

        .back-home button {
            padding: 10px 20px;
            background-color: #218838;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .back-home button:hover {
            background-color: #1e7e34;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="icon">
            <i class="fa-solid fa-circle-check"></i>
        </div>
        <h1>Payment of ₹2620 is Successful.</h1>
        <p>Thank you for your payment! Your booking has been confirmed.</p>
        <div class="details">
            <p><strong>Booking ID:</strong> 1211202412345ABC</p>
            <p><strong>Date:</strong> November 12, 2024</p>
            <p><strong>Mode of Payment:</strong> Debit card/Credit card</p>
        </div>
        <div class="back-home">
            <a href="http://localhost/classroom1/index2.php"><button>Go to Homepage</button></a>
        </div>
    </div>
</body>
</html>
