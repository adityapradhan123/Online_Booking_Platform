<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Booking Form</title>
    <link rel="stylesheet" href="style.css">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container"><!--container-->

        <form class="form-group" method="post" action="process1.php"  ><!--form-->
            <h1 class="text-center text-white">Airline Booking Form</h1>

            <div id="form"><!--form-->
                <h3 class="text-white">Booking Details</h3>

            <div id="input"><!--input-->
                <input type="text" id="input-group" name="from" placeholder="From" >
                <input type="text" id="input-group" name="to" placeholder="To" >
                <input type="date" id="input-group" name="departured" placeholder="Departure Date" >
                <input type="time" id="input-group" name="departuret" placeholder="Departure Time" >
                <select  id="input-group" name="airline" style="background: black;"  >
                    <option value="">Preffered Airline</option>
                    <option value="Indigo"
                    <?php
                        if( $Preffered_Airline='Indigo')
                        {
                            echo "selected";
                        }
                        ?>
                    >IndoGo</option>

                    <option value="AirIndia"
                    <?php
                        if( $Preffered_Airline='AirIndia')
                        {
                            echo "selected";
                        }
                        ?>
                    >AirIndia</option>


                    <option value="Vistra"
                    <?php
                        if( $Preffered_Airline='Vistra')
                        {
                            echo "selected";
                        }
                        ?>
                    >Vistra</option>

                    <option value="SpiceJet"
                    <?php
                        if( $Preffered_Airline='SpiceJet')
                        {
                            echo "selected";
                        }
                        ?>
                    >SpiceJet</option>

                </select>
                
                
                <select  id="input-group" name="seat" style="background: black;">
                    <option value="">Preffered Seating</option>
                    
                    <option value="Economy"
                    <?php
                        if( $Preffered_Seating='Economy')
                        {
                            echo "selected";
                        }
                        ?>
                    >Economy</option>

                    <option value="Business"
                    <?php
                        if($Preffered_Seating='Business')
                        {
                            echo "selected";
                        }
                        ?>
                    >Business</option>
                    <option value="First"
                    <?php
                        if($Preffered_Seating == 'First')
                        {
                            echo "selected";
                        }
                        ?>
                    >First</option>
                </select>
                </div><!--input-->

                <div id="input2"><!--input2-->
                    <input type="number" id="input-group" name="adult" placeholder="Adult" >
                    <input type="number" id="input-group" name="child" placeholder="Children(2-11years)" >
                    <input type="number" id="input-group" name="infant" placeholder="infant(under 2years)" >
                </div><!--input2-->

               

                <div id="input5"><!--input5-->
                    <h3 class="text-white">Personal Details</h3>
                </div><!--input5-->

                <div id="input6"><!--input6-->
                    <input type="text" id="input-group" name="fname" placeholder="Full Name" >
                    <input type="number" id="input-group" name="pno" placeholder="Phone Number" >
                    <input type="email" id="input-group1" name="email" placeholder="Email" >
                </div><!--input6-->
                <button type="submit" class="btn btn-warning text-white bg-success" name="submit"> Book Now</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div><!--form-->

        </form><!--form-->

    </div><!--container-->
    <script>
        // function cal(event){
        //     event.preventDefault();
        //     const people=document.getElementById("people").value;
        //     const price=8250;
        //     if (people){

        //         const total=people*price;
        //         console.log(total);
    
        //         localStorage.setItem("total",total);
        //         window.location.href="card/card.php";
        //     }else{
        //         alert("Please enter a valid number of people.");
        //     }
        // }
    </script>
</body>
</html>