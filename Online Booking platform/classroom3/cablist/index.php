<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cab Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('cab4.jpg'); /* Path to your background image */
            background-size: cover; /* Cover the entire body */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent repetition of the image */
            position: relative;
            height: 100vh; /* Ensure the body takes full height */
        }
        
        /* Apply a fade effect over the background image */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Black overlay with 40% opacity */
            z-index: -1; /* Place the overlay behind the content */
        }

        
        header {
            background: none;
            color: black;
            text-align: center;
            padding: 1.5rem 0;
        }

        .container {
            max-width: 500px;
            background: white; /* White background with opacity */
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="date"] {
            padding: 8px;
        }

        .btn {
            display: inline-block;
            background: green;
            color: Black;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            width: auto;
            cursor: pointer;
            font-size: 1rem;
            text-decoration: none;
            text-align: center;
        }

        .btn:hover {
            background: #218838;
        }

        .message {
            margin-top: 10px;
            color: #333;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Search Your Cab as per the Location</h1>
    </header>

    <div class="container">
        <form id="bookingForm">
            <div class="form-group">
                <label for="pickup">Pickup Location</label>
                <input type="text" id="pickup" name="pickup" placeholder="Enter pickup location" required>
            </div>
            <div class="form-group">
                <label for="drop">Drop Location</label>
                <input type="text" id="drop" name="drop" placeholder="Enter drop location" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>
            </div>
            <a href="http://localhost/classroom1/classroom3/cablist/index2.php" class="btn">Search Cab</a>
        </form>
        <div class="message" id="message"></div>
    </div>
</body>
</html>
