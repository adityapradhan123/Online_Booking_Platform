<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort booking form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form class="form-group" method="POST" action="process1.php">
            <div id="form">
                <h1 class="text-white text-center">Booking Now</h1>

                <div id="first-group">

                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" name="first" placeholder="First name">
                    </div>

                    <div id="content">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="number" id="input-group" name="phone" placeholder="Phone number">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="date" id="input-group" name="Departure" placeholder="Departure Date">
                    </div>

                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <input type="number" id="input-group" name="Guest" placeholder="No of Guest">
                    </div>

                </div>

                <div id="second-group">

                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" name="last" placeholder="Last name">
                    </div>

                    <div id="content">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" id="input-group" name="email" placeholder="Email">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="date" id="input-group" name="arrival" placeholder="Arrival Date">
                    </div>


                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <select id="input-group" name="room" style="background-color: black;">
                            <option value="">Room Type</option>
                            <option value="">AC</option>
                            <option value="">Non-AC</option>
                            <option value="">Single Bed</option>
                            <option value="">Double Bed</option>
                        </select>
                    </div>
            
                </div>
                    
                <button type="submit"  value="Submit" id="submit-btn" name="submit">Book Now</button>

            </div>
        </form>
    </div>
</body>
</html>