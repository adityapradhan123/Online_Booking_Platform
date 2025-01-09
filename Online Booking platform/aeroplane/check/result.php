<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("bg5.webp"); /* Add a suitable background image */
            background-size: cover;
            background-position: center;
            color: #fff;
        }
        h1 {
            text-align: center;
            color: #0056b3;
            margin: 20px;
            font-size: 2em;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
        }
        #results-container {
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .flight-card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }
        .flight-card:hover {
            transform: scale(1.05);
        }
        h3 {
            color: #0056b3;
            margin: 0;
            font-size: 1.5em;
        }
        p {
            margin: 10px 0;
            color: #333;
        }
        button {
            padding: 10px 20px;
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #003d80;
        }
    </style>
</head>
<body>
    <h1>Available Flights</h1>
    <div id="results-container"></div>

    <script>
        // Parse URL parameters and display flight results
        const urlParams = new URLSearchParams(window.location.search);
        const resultsContainer = document.getElementById("results-container");
        let index = 0;

        while (urlParams.has(`flight${index}_from`)) {
            const flightFrom = urlParams.get(`flight${index}_from`);
            const flightTo = urlParams.get(`flight${index}_to`);
            const flightTime = urlParams.get(`flight${index}_time`);
            const flightDuration = urlParams.get(`flight${index}_duration`);
            const flightPrice = urlParams.get(`flight${index}_price`);

            // Create a flight card
            const flightCard = document.createElement("div");
            flightCard.classList.add("flight-card");
            flightCard.innerHTML = `
                <h3>${flightFrom} to ${flightTo}</h3>
                <p>Time: ${flightTime}</p>
                <p>Duration: ${flightDuration}</p>
                <p>Price: ${flightPrice}</p>
                <button onclick="bookFlight('${flightFrom}', '${flightTo}', '${flightTime}', '${flightDuration}', '${flightPrice}')">Book Now</button>
            `;
            resultsContainer.appendChild(flightCard);
            index++;
        }

        function bookFlight(from, to, time, duration, price) {
            const queryParams = new URLSearchParams({
                from, to, time, duration, price
            });
            window.location.href = `customer.php?${queryParams.toString()}`;
        }
    </script>
</body>
</html>
