<?php include("admin/db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD'S Hotel</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    >
       <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
       <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <style>
        * {
            font-family: Poppins;
        }

        .h-font {
            font-family: Merienda;
        }
     input::-webkit-outer-spin-button,
     input::-webkit-inner-spin-button {
   -webkit-appearance: none;
   margin: 0;
  }

    input[type=number] {
    -moz-appearance: textfield;
  }
   .slider-img{
  width: 100%;
  height: 420px;
  object-fit: cover;
  image-rendering: -webkit-optimize-contrast;
}

.custom-bg{
  background-color: #2ec1ac;
}

.custom-bg:hover{
  background-color: #279e8c;
}


 .availability-form{
    margin-top: -50px;
    z-index: 2;
    position: relative;
}

 @media screen and (max-width:575px){
    .availability-form{
        margin-top: 25px;
        padding: 0 35px;       
}
 }
    </style>
</head>

<body>

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top px-3">
        <div class="container-fluid">

            <a class="navbar-brand fw-bold fs-3 h-font" href="index.php">
                ANUJ'S Hotel
            </a>
              
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active me-2" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link me-2" href="rooms.php">Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link me-2" href="facilities.php">Facilities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link me-2" href="contact.php">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link me-2" href="about.php">About</a>
      </li>
    </ul>


            <div class="d-flex">
                <button
                    type="button"
                    class="btn btn-outline-dark me-2"
                    data-bs-toggle="modal"
                    data-bs-target="#loginModal"
                >
                    Login
                </button>

                <button
                    type="button"
                    class="btn btn-outline-dark"
                    data-bs-toggle="modal"
                    data-bs-target="#registerModal"
                >
                    Register
                </button>
            </div>

        </div>
    </nav>
    
      <!-- Carousel -->

            <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=2400&q=80" class="slider-img">
            </div>

            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=2400&q=80" class="slider-img">
            </div>

            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?auto=format&fit=crop&w=2400&q=80" class="slider-img">
            </div>

            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?auto=format&fit=crop&w=2400&q=80" class="slider-img">
            </div>

            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=2400&q=80" class="slider-img">
            </div>

            <div class="swiper-slide">
                 <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=2400&q=80" class="slider-img">
            </div>

            </div>
        </div>
        </div>

              <?php
      $q = mysqli_query($conn,"SELECT * FROM carousel WHERE status=1");
      ?>

      <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
          <div class="swiper-wrapper">

            <?php while($c = mysqli_fetch_assoc($q)){ ?>
              <div class="swiper-slide position-relative">
                <img src="images/carousel/<?php echo $c['image']; ?>" class="slider-img">

                <?php if($c['title']){ ?>
                  <div class="position-absolute text-white"
                      style="bottom:30px;left:30px;font-size:24px;font-weight:bold;">
                    <?php echo $c['title']; ?>
                  </div>
                <?php } ?>

              </div>
            <?php } ?>

          </div>
        </div>
      </div>


         <!-- check availability form -->

         <div class="container availability-form">
          <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
              <h5 class="mb-4">Check Booking Availability</h5>
               <form>
                <div class="row align-items-end">
                  <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight: 500;">Check-in Date</label>
                    <input type="date" class="form-control shadow-none">
                  </div>
                  <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight: 500;">Check-out Date</label>
                    <input type="date" class="form-control shadow-none">
                  </div>
                  <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight: 500;">Adult</label>
                    <select class="form-select shadow-none">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="col-lg-2 mb-3">
                    <label class="form-label" style="font-weight: 500;">Children</label>
                    <select class="form-select shadow-none">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="col-lg-1 mb-lg-3 mt-2">
                    <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>                                
                  </div>
                </div>
              </form>   
            </div>
          </div>
         </div>

    <!-- ================= OUR ROOMS ================= -->
        <div class="container my-5">
        <div class="row mb-4">
            <div class="col-12 text-center">
            <h2 class="fw-bold h-font">Our Rooms</h2>
            <p class="text-muted">Choose the room that suits your comfort</p>
            </div>
        </div>

  <div class="row">

    <!-- Room 1 -->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card shadow border-0 h-100">
        <!-- FIXED IMAGE -->
        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=1200&q=80"
             class="card-img-top"
             style="height:220px; object-fit:cover;">

        <div class="card-body">
          <h5 class="card-title">Deluxe Room</h5>

          <!-- Rating -->
          <div class="mb-2">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
          </div>

          <h6 class="mb-3 text-success">₹ 2500 / night</h6>

          <div class="mb-2">
            <span class="badge bg-light text-dark">2 Adults</span>
            <span class="badge bg-light text-dark">1 Child</span>
          </div>

          <div class="mb-3">
            <span class="badge bg-light text-dark">AC</span>
            <span class="badge bg-light text-dark">TV</span>
            <span class="badge bg-light text-dark">WiFi</span>
          </div>

          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Room 2 -->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card shadow border-0 h-100">
        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?auto=format&fit=crop&w=1200&q=80"
             class="card-img-top"
             style="height:220px; object-fit:cover;">

        <div class="card-body">
          <h5 class="card-title">Luxury Room</h5>

          <div class="mb-2">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>

          <h6 class="mb-3 text-success">₹ 4000 / night</h6>

          <div class="mb-2">
            <span class="badge bg-light text-dark">3 Adults</span>
            <span class="badge bg-light text-dark">2 Children</span>
          </div>

          <div class="mb-3">
            <span class="badge bg-light text-dark">AC</span>
            <span class="badge bg-light text-dark">Smart TV</span>
            <span class="badge bg-light text-dark">WiFi</span>
            <span class="badge bg-light text-dark">Balcony</span>
          </div>

          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Room 3 -->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card shadow border-0 h-100">
        <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?auto=format&fit=crop&w=1200&q=80"
             class="card-img-top"
             style="height:220px; object-fit:cover;">

        <div class="card-body">
          <h5 class="card-title">Suite Room</h5>

          <div class="mb-2">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star text-warning"></i>
          </div>

          <h6 class="mb-3 text-success">₹ 6000 / night</h6>

          <div class="mb-2">
            <span class="badge bg-light text-dark">4 Adults</span>
            <span class="badge bg-light text-dark">2 Children</span>
          </div>

          <div class="mb-3">
            <span class="badge bg-light text-dark">AC</span>
            <span class="badge bg-light text-dark">TV</span>
            <span class="badge bg-light text-dark">WiFi</span>
            <span class="badge bg-light text-dark">Jacuzzi</span>
          </div>

          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg">Book Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- ================= OUR ROOMS END ================= -->

<!-- ================= TESTIMONIALS ================= -->
<div class="container my-5">
  <h2 class="text-center mb-4">Testimonials</h2>

  <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="card text-center p-4">
          <p>"Amazing service and very clean rooms. Highly recommended!"</p>
          <h5>- Rahul Sharma</h5>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card text-center p-4">
          <p>"Best hotel experience I ever had. Staff is very friendly."</p>
          <h5>- Priya Verma</h5>
        </div>
      </div>

      <div class="carousel-item">
        <div class="card text-center p-4">
          <p>"Affordable price and luxury rooms. Loved it!"</p>
          <h5>- Aman Singh</h5>
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</div>

<!-- ================= TESTIMONIALS END ================= -->

<!-- Reach us section -->

<div class="container my-5">
  <h2 class="text-center mb-4">Contact Us</h2>

  <div class="row">
    <div class="col-md-6">
      <h5>Address</h5>
      <p>Mumbai, Maharashtra, India</p>

      <h5>Phone</h5>
      <p>+91 9082773998</p>

      <h5>Email</h5>
      <p>panuj4658@gmail.com</p>

      <div class="bg-white p-4 rounded mb-4">
        <h5>Follow Us</h5>
        <a href="#" class="d-inline-block mb-3">
         <span class="badge bg-light text-dark fs-6 p-2">
         <i class="bi bi-facebook"></i></a>Fasebook
        </span>
       </a>
       <br>
       <a href="#" class="d-inline-block mb-3">
         <span class="badge bg-light text-dark fs-6 p-2">
         <i class="bi bi-instagram"></i></a>Instagram
        </span>
      </a>
      <br>
       <a href="#" class="d-inline-block mb-3">
         <span class="badge bg-light text-dark fs-6 p-2">
         <i class="bi bi-twitter"></i></a>Twitter
        </span>
      </a>
      </div>
    </div>

    <div class="col-md-6">
      <iframe 
        src="https://www.google.com/maps?q=Mumbai,India&output=embed"
        width="100%" 
        height="300" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>
  </div>
</div>

<div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">ANUJ'S Hotel</h3>
      <p>Experience luxury and comfort like never before at ANUJ'S Hotel. Book your stay with us today!
      </p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
      <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
      <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
      <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
      <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow Us</h5>
      <a href="#" class="d-inline-block test-dark test-decoration-none mb-2">
        <i class="bi bi-facebook"></i></a>Fasebook
      </a><br>
      <a href="#" class="d-inline-block test-dark test-decoration-none mb-2">
        <i class="bi bi-twitter"></i></a>Twitter
      </a><br>
      <a href="#" class="d-inline-block test-dark test-decoration-none">
        <i class="bi bi-instagram"></i></a>Instagram
      </a><br>

      </div>
    </div>
  </div>

  <h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Anuj Pandey</h6>

      <!-- Reach us section end -->

    <!-- =============== NAVBAR END =============== -->


    <!-- ================= LOGIN MODAL ================= -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i>
                            User Login
                        </h5>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Email</label>
                            <input
                                type="email"
                                class="form-control shadow-none"
                            >
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input
                                type="password"
                                class="form-control shadow-none"
                            >
                        </div>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-dark">
                                LOGIN
                            </button>

                            <a href="#" class="text-secondary">
                                Forgot Password?
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- =============== LOGIN MODAL END =============== -->


    <!-- ================= REGISTER MODAL ================= -->
    <div class="modal fade" id="registerModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                            User Registration
                        </h5>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                        ></button>
                    </div>

                    <div class="modal-body">
                        <span class="badge bg-light text-dark mb-3 d-block text-wrap">
                            Note: Your details must match with your ID (Aadhaar Card, Passport, Driving License, etc.) 
                            that you will be required to show during check-in.
                        </span>
                        <div class="container-fluid">
                          <div class="row">
                            
                            <div class="col-md-6 ps-0 mb-3">                           
                             <label class="form-label">Name</label>
                             <input type="text" class="form-control shadow-none">
                            </div>
                           <div class="col-md-6 ps-0 mb-3">
                              <label class="form-label">Email</label>
                            <input type="email" class="form-control shadow-none">
                           </div>
                           <div class="col-md-6 ps-0 mb-3">                           
                             <label class="form-label">Phone Number</label>
                             <input type="number" class="form-control shadow-none">
                            </div>
                           <div class="col-md-6 ps-0 mb-3">
                              <label class="form-label">Picture</label>
                            <input type="file" class="form-control shadow-none">
                           </div>
                            <div class="col-md-12 ps-0 mb-3">
                              <label class="form-label">Address</label>
                            <textarea class="form-control shadow-none" rows="1"></textarea>
                           </div>
                           <div class="col-md-6 ps-0 mb-3">                           
                             <label class="form-label">Pincode</label>
                             <input type="number" class="form-control shadow-none">
                            </div>
                           <div class="col-md-6 ps-0 mb-3">
                              <label class="form-label">Date of Birth</label>
                              <input type="date" class="form-control shadow-none">
                           </div>
                           <div class="col-md-6 ps-0 mb-3">                           
                             <label class="form-label">Password</label>
                             <input type="password" class="form-control shadow-none">
                            </div>
                           <div class="col-md-6 ps-0 mb-3">
                              <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control shadow-none">
                           </div>
                            </div>
                            <div class="text-center my-1">
                              <button type="submit" class="btn btn-dark shadow-none">
                                REGISTER</button>
                            </div>                          
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

<br><br><br>
<br><br><br>
                
    <!-- =============== REGISTER MODAL END =============== -->
    

    <!-- Bootstrap JS -->
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

      <script>
      var swiper = new Swiper(".swiper-container", {
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        effect: "fade"
      });
      </script>


   <script>
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    }
  });
</script>
</body>
</html>