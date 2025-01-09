<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Cabs, Autos & Car Rentals | CabRide</title>
    <link rel="stylesheet" href="CabRide_style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="shortcut icon" href="CabRide_logo.png" type="img/x-icon">

    <style>
        /* Loading Overlay */
        .loading-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }

        .loading-spinner {
            border: 8px solid #f3f3f3; /* Light grey */
            border-top: 8px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="background-text">
            <h2>book a <span>cab now</span></h2>
        </div>
        <header class="header">
            <a href="#" id="logo"><img src="image/taxilogo.png" width="150px"></a>
            
            <a href="#" id="menu-bars" class="fas fa-bars"></a>
        </header>
        <div class="taxi-image">
            <img src="image/images.png" alt="">
        </div>
    </div>
    
    <div class="home-container">
        <div class="home-content">
            <div class="inner-content">
                <h3>best in city</h3>
                <h2>trusted cab service in country</h2>
                <p>To travel with the lowest fares choose CarRide Share. For a faster travel experience we have Share Express on some fixed routes with zero deviations. Choose your ride and zoom away!</p>
                <a href="#" class="booknow">book now</a>
            </div>
            <div class="inner-content">
                <div class="contact-form">
                    <div class="form-heading">
                        <h1>Enter Your Details</h1>
                    </div>
                    <form class="form-fields" method="POST" action="process1.php" onsubmit="return handleSubmit(event);">
                        <input type="text" name="uname" placeholder="Name" required>
                        <input type="number" name="uphone" placeholder="Phone" required>
                        <input type="text" name="tdate" placeholder="Date" required>
                        <input type="text" name="time" placeholder="Time" required>
                        <input type="text" name="plocation" placeholder="Pickup location" required>
                        <input type="text" name="dlocation" placeholder="Drop location" required>
                        <input type="submit" name="submit" value="submit">
                    </form>
                    <div class="search-cabs"></div>
                </div>
            </div>
        </div>
    </div>

   