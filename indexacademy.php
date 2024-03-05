<?php 
 
// Start a session 
session_start(); 
 
if (isset($_GET['logout'])) { 
    // Clear all session variables 
    session_unset(); 
 
    // Destroy the session 
    session_destroy(); 
 
    // Redirect to the login page 
    header('Location: login.php'); 
    exit(); 
} 
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- End Bootstrap CSS -->
    <link rel="icon" href="img/icon.svg" type="image/x-icon">
    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Simple Coffee Academy</title>
    <!--End Custom Css-->
</head>

<body>

   
 
    <header>
       
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="/images/logo-label.svg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.html">Courses</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.html">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="indexshop.html">Shop</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="login.html">login</a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navbar End-->
    </header>
    <!--Header End-->


    <div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="images/coffee 7.png"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>Academy of teaching employees in Simple Coffee Academy </h5>
                    <p>give yout self and us a chance to develop <br> empowering you to craft dynamic and interactive Skills</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="images/coffee 2.png"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>What do we teach you?</h5>
                    <p> Barista</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="images/coffee 3.png"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>What is our goal</h5>
                    <p>Spreading programming awareness and <br> facilitating JavaScript education to be your way in the world of programming.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about mt-5">
            <div class="container-fluid">
                <h2 class="h1-responsive font-weight-bold text-center my-2">About</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-1">Do you have any questions? Please do not hesitate to
                    contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                <div class="row  pt-5 pb-5">

                    <div class="col-lg-5 align-items-stretch video-box"
                        style='background-image: url("img/coffee 8.png");'>
                        <a href="#" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">
                            <h3>Another course  <strong>if you want to become an expert</strong></h3>
                            <p>
                                Here there is a course on YouTube : Course Structure and Projects contains 200 lectures

                                        I was a fan of delving deeper into the field of JavaScript study
                            </p>
                            <!-- <p class="font-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</li>
                                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                    storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p> -->
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <section>
            <div class="container course pb-5 pt-5">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Courses</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
                    contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                

            

                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="images/coffee 5.png"
                                    class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">JS Course</h5>
                                <p class="card-text">
                                    Introduction to JavaScript
                                    </p>
                                <a href="file/site/menu.html" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <!--<section>
            <div class="container">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Gallery</h2>
                Section description
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
                    contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                 Gallery
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="https://cdn.pixabay.com/photo/2016/06/25/12/52/laptop-1478822_960_720.jpg"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                    </div>
                </div>
                Gallery -->
            </div>
        </section>


        <section>
            <div class="container mb-5">
                <!--Section: Contact v.2-->
                <section class="mb-4">

                    <!--Section heading-->
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                   
                    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate
                        to contact us directly. Our team will come back to you within
                        a matter of hours to help you.</p>

                        <div class="row">

                      
                            <div class="col-md-6 mb-md-0 mb-5">
                                <form id="contact-form" name="contact-form" action="#" method="POST">
    
                                    <!--Grid row-->
                                    <div class="row">
    
                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="name" class="">Your name</label>
                                                <input type="text" id="name" name="name" class="form-control">
                                                
                                            </div>
                                        </div>
                                        <!--Grid column-->
    
                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <label for="email" class="">Your email</label>
                                                <input type="text" id="email" name="email" class="form-control">
                                               
                                            </div>
                                        </div>
                                        <!--Grid column-->
    
                                    </div>
                                    <!--Grid row-->
    
                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <label for="subject" class="">Subject</label>
                                                <input type="text" id="subject" name="subject" class="form-control">
                                                
                                            </div>
                                        </div>
                                    </div>
                                   
    
                                   
                                    <div class="row">
    
                                        <!--Grid column-->
                                        <div class="col-md-12">
    
                                            <div class="md-form">
                                                <label for="message">Your message</label>
                                                <textarea type="text" id="message" name="message" rows="2" 
                                                class="form-control md-textarea"></textarea>
                                                
                                            </div>
    
                                        </div>
                                    </div>
                                    <!--Grid row-->
    
                                </form>
    
                                <div class="text-center text-md-left">
                                    <a class="btn btn-primary"
                                        onclick="document.getElementById('contact-form').submit();">Send</a>
                                </div>
                                <div class="status"></div>
                            </div>
                        <!--Grid column-->

                        <!--Grid column-->
                     <div class="col-md-6 text-center">
                            <iframe
                                src=""
                                width="600" height="300px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
            </div> 
        </section>
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-primary py-3 text-white">
          
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="bi bi-gem me-3"></i>Simple Coffee Academy
                            </h6>
                            <p>
                                we are Simple Coffee Academy if there are any feedback or inquiries please contact us
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                           
                        <!-- Grid column -->

                        <!-- Grid column -->
            
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Contact
                            </h6>
                            <p><i class="bi bi-envelope me-3"></i>  info@example.ru</p>
                             <p><i class="bi bi-phone me-3"></i>89015275894</p>
                            <p><i class="bi bi-print me-3"></i></p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center py-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2024 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">SimpleCoffee</a>
            </div>
              <!-- Copyright -->
        </footer>
        <!-- Footer -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

</body>

</html>