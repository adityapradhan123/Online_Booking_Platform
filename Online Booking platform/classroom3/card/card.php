<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e8fa2e31b4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="card.css">
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

        /* Add styling for the new invoice section */
        .invoice-section {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .invoice-item {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }

        .invoice-item .label {
            font-weight: bold;
        }

        .invoice-item .value {
            font-weight: normal;
        }

        .total-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
    </div>

    <div class="container">
        <div class="left">
            <p>Payment methods</p>
            <hr style="border:1px solid #ccc; margin: 0 15px;">
            <div class="methods">
                <div onclick="doFun()" id="tColorA" style="color: greenyellow;">
                    <i class="fa-solid fa-credit-card" style="color: greenyellow;"></i> Payment by card
                </div>
                <div onclick="doFunA()" id="tColorB">
                    <i class="fa-solid fa-building-columns"></i> Internet banks
                </div>
                <div onclick="doFunB()" id="tColorC">
                    <i class="fa-solid fa-wallet"></i> Apple/Google pay
                </div>
            </div>
            <hr style="border:1px solid #ccc; margin: 0 15px;">
        </div>
        <div class="center">
            <a href="https://www.shift4shop.com/credit-card-logos.html">
                <img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="250" height="auto"/>
            </a>
            <hr style="border:1px solid #ccc; margin: 0 15px;">

            <div class="card-details">
                <form id="paymentForm" onsubmit="return false;"> <!-- Prevent form submission -->
                    <p>Card number</p>
                    <div class="c-number" id="c-number">
                        <input id="number" class="cc-number" placeholder="Card number" maxlength="19" required>
                        <i class="fa-solid fa-credit-card" style="margin: 0;"></i>
                    </div>

                    <div class="c-details">
                        <div>
                            <p>Expiry date</p>
                            <input id="e-date" class="cc-exp" placeholder="MM/YY" required maxlength="5">
                        </div>
                        <div>
                            <p>CVV</p>
                            <div class="cvv-box" id="cvv-box">
                                <input id="cvv" class="cc-cvv" placeholder="CVV" required maxlength="3">
                                <i class="fa-solid fa-circle-question" title="3 digits on the back of the card" style="cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="email">
                        <p>Email</p>
                        <input type="email" placeholder="example@email.com" id="email" required>
                    </div>
                    
                    <button type="button" onclick="processPayment()">Pay Now</button> <!-- Call JavaScript function -->
                </form>
            </div>
        </div>

        <div class="right">
            <p>Booking Information</p>
            <hr style="border:1px solid #ccc; margin: 0 15px;">
            <div class="details">
                <div style="font-weight: bold; padding: 3px 0;">Order description</div>
                <div style="padding: 3px 0;">Cab Type : Sedan</div>
            </div>
            <hr style="border:1px solid #ccc; margin: 0 15px;">

            <!-- New Invoice Section -->
            <div class="invoice-section">
                <div class="invoice-item">
                    <span class="label">Cab Price</span>
                    <span class="value" id="cabPrice">₹2500</span>
                </div>
                <div class="invoice-item">
                    <span class="label">GST (18%)</span>
                    <span class="value" id="gstAmount">₹120</span>
                </div>
                <div class="invoice-item total-price">
                    <span class="label">Total Amount</span>
                    <span class="value" id="totalAmount">₹2620</span>
                </div>
            </div>
            <hr style="border:1px solid #ccc; margin: 0 15px;">
            <a href="https://www.shift4shop.com/credit-card-logos.html">
                <img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="100%" height="auto" />
            </a>
        </div>
    </div>

    <script src="card.js"></script>
    <script>
        function showLoading() {
            document.getElementById("loadingOverlay").style.display = "flex"; // Show loading overlay
        }

        function processPayment() {
            showLoading(); // Show loading overlay
            
            setTimeout(() => {
                // Redirect to the success page after 2 seconds
                window.location.href = 'http://localhost/classroom1/classroom3/card/success.php';
            }, 2000);
        }
    </script>
</body>
</html>
