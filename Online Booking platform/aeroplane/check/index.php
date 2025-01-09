<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Search</title>
    <style>
        body {
          
           
            font-family: Arial, sans-serif;
            margin: 0;
            background-image: url("bg5.webp");
            padding: 0;
            background-color: #928b8b;
            color: #333;
        }
        .container {
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: grey;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #0056b3;
            margin-bottom: 20px;
        }
        .form-group, .flight-results {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .button {
            display: inline-block;
            width: 100%;
            padding: 10px;
            background-color: #0056b3;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
            cursor: pointer;
        }
        .button:hover {
            background-color: #003d80;
        }
        .flight-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .flight-card h3, .flight-card p {
            margin: 5px 0;
        }
        .price {
            font-size: 18px;
            font-weight: bold;
            color: #e53935;
        }
        
    </style>
</head>
<body>

    <div class="container">
        <h1>Search Flights</h1>
        <div class="flight-search">
            <div class="form-group">
                <label for="from">From Location</label>
                <input type="text" id="from" name="from" placeholder="Enter departure city" required>
            </div>
            <div class="form-group">
                <label for="to">To Location</label>
                <input type="text" id="to" name="to" placeholder="Enter destination city" required>
            </div>
            <div class="form-group">
                <label for="departure-date">Departure Date</label>
                <input type="date" id="departure-date" name="departure-date" required>
            </div>
            <button class="button" onclick="searchFlights()">Search Flights</button>

        </div>

        <!-- Flight Results Section -->
        <div class="flight-results" id="flight-results"></div>
    </div>

   

    <script>
      // Sample flight data
      const flights = [
          { id: 1, from: "New Delhi", to: "Mumbai", time: "10:00 AM", duration: "2 hours 10 minutes", price: "₹ 7,500" },
          { id: 2, from: "Mumbai", to: "New Delhi", time: "7:30 AM", duration: "2 hours 10 minutes", price: "₹ 9,500" },
          { id: 15, from: "New Delhi", to: "Mumbai", time: "10:00 AM", duration: "2 hours 10 minutes", price: "₹ 9,500" },
          { id: 16, from: "Mumbai", to: "New Delhi", time: "3:30 AM", duration: "2 hours 10 minutes", price: "₹ 3,500" },
          { id: 3, from: "Bangalore", to: "Chennai", time: "12:00 PM", duration: "1 hour 30 minutes", price: "₹ 3,200" },
          { id: 4, from: "Chennai", to: "Bangalore", time: "12:30 PM", duration: "1 hour 30 minutes", price: "₹ 5,200" },
          { id: 17, from: "Bangalore", to: "Chennai", time: "1:00 AM", duration: "1 hour 30 minutes", price: "₹ 3,200" },
          { id: 18, from: "Chennai", to: "Bangalore", time: "12:30 PM", duration: "1 hour 30 minutes", price: "₹ 8,200" },
          { id: 7, from: "Kolkata", to: "Hyderabad", time: "4:00 PM", duration: "1 hour 45 minutes", price: "₹ 4,700" },
          { id: 6, from: "Hyderabad", to: "Kolkata", time: "4:30 PM", duration: "1 hour 45 minutes", price: "₹ 4,100" },
          { id: 19, from: "Kolkata", to: "Hyderabad", time: "4:00 PM", duration: "1 hour 45 minutes", price: "₹ 4,700" },
          { id: 20, from: "Hyderabad", to: "Kolkata", time: "4:30 PM", duration: "1 hour 45 minutes", price: "₹ 6,100" },
          { id: 7, from: "Varanasi", to: "Mumbai", time: "11:00 AM", duration: "2 hours 10 minutes", price: "₹ 5,500" },
          { id: 8, from: "Mumbai", to: "Varanasi", time: "12:00 PM", duration: "1 hour 30 minutes", price: "₹ 3,200" },
          { id: 21, from: "Varanasi", to: "Mumbai", time: "11:00 AM", duration: "2 hours 10 minutes", price: "₹ 7,500" },
          { id: 22, from: "Mumbai", to: "Varanasi", time: "12:00 PM", duration: "1 hour 30 minutes", price: "₹ 3,200" },
          { id: 9, from: "Kolkata", to: "Hyderabad", time: "4:00 PM", duration: "1 hour 45 minutes", price: "₹ 4,100" },
          { id: 10, from: "Hyderabad", to: "Kolkata", time: "5:00 PM", duration: "1 hour 45 minutes", price: "₹ 7,100" },
          { id: 11, from: "Patna", to: "Varanasi", time: "2:00 PM", duration: "1 hour 45 minutes", price: "₹ 4,100" },
          { id: 12, from: "Bhubaneswar", to: "Varanasi", time: "4:00 PM", duration: "1 hour 45 minutes", price: "₹ 4,100" },
          { id: 13, from: "Bhubaneswar", to: "New Delhi", time: "3:00 PM", duration: "1 hour 45 minutes", price: "₹ 3,100" },
          { id: 14, from: "Bhubaneswar", to: "New Delhi", time: "8:00 PM", duration: "1 hour 45 minutes", price: "₹ 8,100" },


          { id: 1, from: "New Delhi", to: "Dubai", time: "10:00 AM", duration: "2 hours 10 minutes", price: "₹ 7,500" },
          { id: 1, from: "New Delhi", to: "Dubai", time: "12:00 AM", duration: "2 hours 10 minutes", price: "₹ 5,500" },
          { id: 1, from: "New Delhi", to: "Dubai", time: "1:00 AM", duration: "2 hours 10 minutes", price: "₹ 3,500" },
          { id: 1, from: "New Delhi", to: "Dubai", time: "7:00 AM", duration: "2 hours 10 minutes", price: "₹ 9,500" },

          { id: 2, from: "Mumbai", to: "Bhubaneswar", time: "10:30 AM", duration: "2 hours 10 minutes", price: "₹ 5,500" },

          { id: 15, from: "Bhubaneswar", to: "Londan", time: "3:00 AM", duration: "2 hours 10 minutes", price: "₹ 15,500" },
          { id: 15, from: "Bhubaneswar", to: "Londan", time: "1:00 PM", duration: "2 hours 10 minutes", price: "₹ 19,500" },
          { id: 15, from: "Bhubaneswar", to: "Londan", time: "12:00 PM", duration: "2 hours 10 minutes", price: "₹ 20,500" },

          { id: 16, from: "Mumbai", to: "New Delhi", time: "10:30 AM", duration: "2 hours 10 minutes", price: "₹ 5,500" },
          { id: 3, from: "Bangalore", to: "Chennai", time: "12:00 PM", duration: "1 hour 30 minutes", price: "₹ 3,200" },
          { id: 4, from: "Chennai", to: "Bangalore", time: "12:30 PM", duration: "1 hour 30 minutes", price: "₹ 5,200" },
          { id: 17, from: "Bangalore", to: "Chennai", time: "12:00 PM", duration: "1 hour 30 minutes", price: "₹ 3,200" },
          { id: 18, from: "Chennai", to: "Bangalore", time: "12:30 PM", duration: "1 hour 30 minutes", price: "₹ 8,200" },
          { id: 7, from: "Kolkata", to: "Hyderabad", time: "4:00 PM", duration: "1 hour 45 minutes", price: "₹ 4,700" },




          // New Delhi (DEL) - Dubai (DXB)
    { id: 201, from: "New Delhi", to: "Dubai", time: "8:00 AM", duration: "3 hours 45 minutes", price: "₹ 12,000" },
    { id: 202, from: "New Delhi", to: "Dubai", time: "2:00 PM", duration: "3 hours 45 minutes", price: "₹ 13,500" },
    { id: 203, from: "New Delhi", to: "Dubai", time: "10:00 PM", duration: "3 hours 45 minutes", price: "₹ 14,500" },

    // Mumbai (BOM) - Doha (DOH)
    { id: 204, from: "Mumbai", to: "Doha", time: "5:00 AM", duration: "4 hours 15 minutes", price: "₹ 11,500" },
    { id: 205, from: "Mumbai", to: "Doha", time: "3:00 PM", duration: "4 hours 15 minutes", price: "₹ 12,800" },
    { id: 206, from: "Mumbai", to: "Doha", time: "9:00 PM", duration: "4 hours 15 minutes", price: "₹ 13,000" },

    // Hyderabad (HYD) - New York (JFK)
    { id: 207, from: "Hyderabad", to: "New York", time: "12:00 PM", duration: "16 hours", price: "₹ 65,000" },
    { id: 208, from: "Hyderabad", to: "New York", time: "7:00 PM", duration: "16 hours", price: "₹ 68,000" },
    { id: 209, from: "Hyderabad", to: "New York", time: "11:00 PM", duration: "16 hours", price: "₹ 70,500" },

    // Bangalore (BLR) - Paris (CDG)
    { id: 210, from: "Bangalore", to: "Paris", time: "1:00 AM", duration: "10 hours 15 minutes", price: "₹ 45,000" },
    { id: 211, from: "Bangalore", to: "Paris", time: "10:00 AM", duration: "10 hours 15 minutes", price: "₹ 48,000" },
    { id: 212, from: "Bangalore", to: "Paris", time: "6:00 PM", duration: "10 hours 15 minutes", price: "₹ 50,500" },

    // Chennai (MAA) - Singapore (SIN)
    { id: 213, from: "Chennai", to: "Singapore", time: "7:30 AM", duration: "4 hours 30 minutes", price: "₹ 8,500" },
    { id: 214, from: "Chennai", to: "Singapore", time: "1:30 PM", duration: "4 hours 30 minutes", price: "₹ 9,200" },
    { id: 215, from: "Chennai", to: "Singapore", time: "8:30 PM", duration: "4 hours 30 minutes", price: "₹ 10,000" },

    // Kolkata (CCU) - Bangkok (BKK)
    { id: 216, from: "Kolkata", to: "Bangkok", time: "6:00 AM", duration: "2 hours 50 minutes", price: "₹ 6,200" },
    { id: 217, from: "Kolkata", to: "Bangkok", time: "12:00 PM", duration: "2 hours 50 minutes", price: "₹ 7,000" },
    { id: 218, from: "Kolkata", to: "Bangkok", time: "7:00 PM", duration: "2 hours 50 minutes", price: "₹ 7,500" },

    // Ahmedabad (AMD) - London (LHR)
    { id: 219, from: "Ahmedabad", to: "London", time: "3:00 AM", duration: "9 hours 30 minutes", price: "₹ 42,000" },
    { id: 220, from: "Ahmedabad", to: "London", time: "12:00 PM", duration: "9 hours 30 minutes", price: "₹ 44,500" },
    { id: 221, from: "Ahmedabad", to: "London", time: "8:00 PM", duration: "9 hours 30 minutes", price: "₹ 46,000" },

    // Kochi (COK) - Dubai (DXB)
    { id: 222, from: "Kochi", to: "Dubai", time: "6:00 AM", duration: "4 hours", price: "₹ 10,500" },
    { id: 223, from: "Kochi", to: "Dubai", time: "1:00 PM", duration: "4 hours", price: "₹ 11,000" },
    { id: 224, from: "Kochi", to: "Dubai", time: "10:00 PM", duration: "4 hours", price: "₹ 12,000" },

    // Pune (PNQ) - Frankfurt (FRA)
    { id: 225, from: "Pune", to: "Frankfurt", time: "5:30 AM", duration: "9 hours", price: "₹ 49,000" },
    { id: 226, from: "Pune", to: "Frankfurt", time: "3:30 PM", duration: "9 hours", price: "₹ 52,000" },
    { id: 227, from: "Pune", to: "Frankfurt", time: "11:30 PM", duration: "9 hours", price: "₹ 54,500" },

    // Goa (GOI) - Abu Dhabi (AUH)
    { id: 228, from: "Goa", to: "Abu Dhabi", time: "4:00 AM", duration: "3 hours 45 minutes", price: "₹ 9,500" },
    { id: 229, from: "Goa", to: "Abu Dhabi", time: "2:00 PM", duration: "3 hours 45 minutes", price: "₹ 10,500" },
    { id: 230, from: "Goa", to: "Abu Dhabi", time: "10:00 PM", duration: "3 hours 45 minutes", price: "₹ 11,200" }


          // Additional flights can be added here
      ];
  
      function searchFlights() {
          const fromLocation = document.getElementById("from").value.trim();
          const toLocation = document.getElementById("to").value.trim();
  
          // Filter flights based on "from" and "to" location
          const availableFlights = flights.filter(flight =>
              flight.from.toLowerCase() === fromLocation.toLowerCase() &&
              flight.to.toLowerCase() === toLocation.toLowerCase()
          );
  
          if (availableFlights.length > 0) {
              // Prepare query parameters for result.html
              const queryParams = new URLSearchParams();
              availableFlights.forEach((flight, index) => {
                  queryParams.append(`flight${index}_from`, flight.from);
                  queryParams.append(`flight${index}_to`, flight.to);
                  queryParams.append(`flight${index}_time`, flight.time);
                  queryParams.append(`flight${index}_duration`, flight.duration);
                  queryParams.append(`flight${index}_price`, flight.price);
              });
  
              // Redirect to result.html with query parameters
              window.location.href = `result.php?${queryParams.toString()}`;
          } else {
              alert("No flights available for the selected route.");
          }
      }
  </script>
  





</body>
</html>
