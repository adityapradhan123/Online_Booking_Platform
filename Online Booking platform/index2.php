<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  






</head>
<body>

    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 border-bottom fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#"> www.<span class="text-primary">Booking.In</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#cate">About</a>
                  </li>
              <li class="nav-item dropdown" id="service">
                <a class="nav-link dropdown-toggle" href="#" id="service" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#services">Flights Booking</a></li>
                  <li><a class="dropdown-item" href="#services">Cab Booking</a></li>
                  <li><a class="dropdown-item" href="#services">Hotels Booking</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#services">More...</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#team">Our Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contt">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-success" href="login2/index.php" >Logout</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>



      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/banner.jpg" class="d-block  w-100" href="#" alt="..." >
        <div class="carousel-caption d-md-block text-dark">
            <h3>Book Now on This Vacations!</h3>
            <h4 class="text-white">Top Deal's on Hotel's, Flight's, Cab's and many more</h4>
        </div>  
        </div>
          <div class="carousel-item">
            <img src="image/img-2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block text-dark">
                <h3>Let's Enjoy Your Trip With Us</h3>
                <h4 class="text-dark">Welcome To Let's Travel </h4>
            </div>  
          </div>
          <div class="carousel-item">
            <img src="image/banner1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block text-white">
                <h2>Let's Discover The World Together</h2>
                <p> New Life New Adventure</p>
            </div>  
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>


    <section class="Ab my-5" id="cate">
        <div class="container"data-aos="flip-right" data-aos-offset="200" >
            <div class="text-center my-5">
            <h1>About<span class="text-primary"> us</span></h1>
            <hr  class="w-25 m-auto">
        </div>
        
        

        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 col-12 ">
          <h1>What do you <span class="text-primary">want to know?</span> </h1>
          <p class="p-2"><strong>Online Booking Websites</strong> provide a streamlined and efficient way for travelers to plan, book, and manage their travel arrangements. By leveraging technology and the power of the internet, these platforms have revolutionized the travel industry, making travel more accessible and enjoyable for people around the world.</p>
          </div>
           
        </div>

        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Wide Range of Options:
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                These platforms typically aggregate a vast array of options, whether it's flights, hotels, vacation rentals, car rentals, tours, or activities. This variety allows users to compare different providers, prices, and amenities easily.Online booking websites often feature special promotions, discounts, and loyalty programs that can further enhance the value of booking through their platforms.


              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Price Comparison:
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Online booking websites often include tools that enable users to compare prices across multiple providers. This helps users find the best deals and potentially save money.Reputable online booking websites prioritize security in transactions, ensuring that personal and payment information is protected. Trusted platforms also have established customer support systems to assist users with any issues that may arise.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Reviews and Ratings:
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                User reviews and ratings provide valuable insights into the quality and reliability of services. This feedback helps users make informed decisions before booking.Many platforms offer flexible booking options, allowing users to customize their travel plans according to their preferences. This might include selecting specific dates, times, airlines, room types, or rental car models.


              </div>
            </div>
          </div>
        </div>


    


    <section class="services py-5 bg-light"data-aos="fade-left" data-aos-offset="200" id="Services">
        <div class="container" id="services">
            <div class="text-center my-5">
                <h1>Our <span class="text-primary">Services</span></h1>
                <hr  class="w-25 m-auto">
        </div>
<div class="row "data-aos="fade-up-right" data-aos-offset="200" >
        <div class="col-sm-12 col-md-4 col-lg-4 col-12 ">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Flights Booking</h5>
                  <p class="card-text">Mobile application is the process of creating softwaare appliations that run on mobile device.</p>

                  <div class="card">
                    <div class="card-body">
                        <img src="image/plane.avif">
                    </div>
                </div>

                  <a href="aeroplane/check/index.php" class="btn btn-success mt-2">Book Now</a>
                  <h2 class="offer text-center text-dark">20% off</h2>
                </div>
            </div>
        </div>


            <div class="col-sm-12 col-md-4 col-lg-4 col-12 ">

                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-dark">Cab Booking</h5>
                      <p class="card-text text-dark">The art and practice of planning and projecting indeas and experience with visual and textual content.</p>
                      
                          <div class="card">
                            <div class="card-body">
                                <img src="image/cab.jpg">
                            </div>
                        </div>
  
                      <a href="classroom3/cablist/index.php" class="btn bg-success mt-4 text-white">Book Now</a>
                      <h2 class="offer text-center text-dark">30% off</h2>
                    </div>
                </div>
            </div>

                <div class="col-sm-12 col-md-4 col-lg-4 col-12 ">

                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Hotels Booking</h5>
                          <p class="card-text">It is the maintenance or the work that happens behind the scenes to make a website look great.</p>
                          
                          <div class="card">
                            <div class="card-body">
                                <img src="image/hotel.jpg">
                            </div>
                        </div>
                          
                          <a href="hotel_form/hotel.php" class="btn btn-success mt-3">Book Now</a>
                          <h2 class="offer text-center text-dark">20% off</h2>
                        </div>
                    </div>

                </div>
            </div>



            </div>
        </section>

        <section class="Ab my-5" id="team" id="team">
            <div class="container"data-aos="flip-right" data-aos-offset="200" >
                <div class="text-center my-5">
                <h1>Our <span class="text-primary">Team</span></h1>
                <hr  class="w-25 m-auto">
            </div>
            <div class="row text-center">
                <div class="col-sm-12 col-md-4 col-lg-4 col-12">

                    <div class="card">
                        <div class="card-body">
                            <img src="image/sam.jpg" class="img-fluid rounded-circle border border-primary p-2">
                          <h5 class="card-title mt-2">Gulshan Sharma</h5>
                          <p class="card-text">Front-End  Developer</p>
                          <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-12 ">

                    <div class="card">
                        <div class="card-body">
                            <img src="image/raja.jpg " class="img-fluid rounded-circle border border-primary p-2">
                          <h5 class="card-title mt-2">Tangudu Raja</h5>
                          <p class="card-text">Front-End  Developer</p>
                          <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-12 ">

                    <div class="card">
                        <div class="card-body">
                            <img src="image/papu.jpg" class="img-fluid rounded-circle border border-primary p-2">
                          <h5 class="card-title mt-2">Pradyumna Pradhan</h5>
                          <p class="card-text">Back-End  Developer</p>
                          <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                    </div>

                </div>
</div>
</section>
    </section>

   

<footer class="text-center text-lg-start bg-body-tertiary  bg-dark text-light">
  <section class="d-flex justify-content-center justify-content-lg-between">
   
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    
  </section>

  <section class="" id="contt">
    <div class="container text-center text-md-start mt-5">
     
      <div class="row mt-3">
        
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Booking.in
          </h6>
          <p>
            Online Booking Websites provide a streamlined and efficient way for travelers to plan, book, and manage their travel arrangements. By leveraging technology and the power of the internet.
          </p>
        </div>
       
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
         
          <h6 class="text-uppercase fw-bold mb-4">
            Services
          </h6>
          <p>
            <a href="#!" style="text-decoration: none" class="text-reset">Flight's</a>
          </p>
          <p>
            <a href="#!" style="text-decoration: none" class="text-reset">Cab Booking</a>
          </p>
          <p>
            <a href="#!" style="text-decoration: none" class="text-reset">Hotel's</a>
          </p>
        </div>
        
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!"  style="text-decoration: none"class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" style="text-decoration: none" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" style="text-decoration: none" class="text-reset">Helps</a>
          </p>
        </div>
        

        <div class="col-xl-3 mx-auto mb-md-0 mb-4">
          
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i>Varanasi, UttarPradesh, India</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
        </div>
       
      </div>
     
    </div>
  </section>
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/ " style="text-decoration: none">Booking.in</a>
  </div>
</footer>



    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        
        // JavaScript for hover effect
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        navLinks.forEach(link => {
            link.addEventListener('mouseover', () => {
                link.style.color = '#fff'; // Change text color on hover
                link.style.backgroundColor = '	#D3D3D3'; // Change background color on hover
                link.style.borderRadius = '5px'; // Optional: Add rounded corners
            });

            link.addEventListener('mouseout', () => {
                link.style.color = ''; // Revert text color
                link.style.backgroundColor = ''; // Revert background color
                link.style.borderRadius = ''; // Revert border radius
            });
        });
    </script>
</body>
</html>