<!--<?php 
 
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
    Required meta tags -->
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
                <a class="navbar-brand" href="#">
                    <img src="images\logo-label.svg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php">Courses</a>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="http://localhost/simplecoffee/simplecoffeeacademy/client_dashbord.php">Dashboard</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="indexshop.php">Shop</a>
                        </li>
                         <!-- <li class="nav-item">
                            <a class="nav-link" href="login.php">login</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">logout</a>

                        </li>  -->
                    </ul>
                    <div class="buttons"> 
        <?php 
        if (!isset($_SESSION['user_id'])) { ?> 
                <input type="button" value="Login" onclick="redirectToURL('http://localhost/simplecoffee/simplecoffeeacademy/login.php')"> 
                 
            <?php } else { 
                // User is logged in 
                $username = $_SESSION['username']; ?> 
             
                <input type="button" value="Dashboard" onclick="redirectToURL('http://localhost/simplecoffee/simplecoffeeacademy/client_dashbord.php')"> 
                <input type="button" value="Logout" onclick="redirectToURL('http://localhost/simplecoffee/simplecoffeeacademy/indexacademy.php?logout')"> 
            <?php } 
            ?> 
      </div> 
 
        <!--Navbar End-->
                </div>
            </div>
        </nav>
        <script> 
      // JavaScript function to redirect to a URL 
      function redirectToURL(url) { 
          window.location.href = url; 
      } 
    </script>
       
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
                    <h5>Academy for teaching employees in Simple Coffee Academy </h5>
                    <p>give yourself and us a chance to develop <br> empowering you to craft dynamic and interactive Skills</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="images/coffee 2.png"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>What do we teach you?</h5>
                    <p> we have to save our quality control for our clients</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="images/coffee 3.png"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>What is our goal</h5>
                    <p>saving quality <br> teaching you how you can be better</p>
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
                <h2 class="h1-responsive font-weight-bold text-center my-2"></h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-1"></p>
                <div class="row  pt-5 pb-5">

                    <div class="col-lg-5 align-items-stretch video-box"
                        style='background-image: url("images/coffee 8.png");'>
                        <a href="https://www.udemy.com/course/barista-training-and-techniques/" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">
                            <h3>Another course  <strong>if you want to become an expert like a barista</strong></h3>
                            <p>
                                Here there is a course  : Course Structure and Projects contains 200 lectures

                                        I was a fan of delving deeper into the field of JavaScript study
                            </p>
                           
                        </div>

                    </div>

                </div>

            </div>
        </section>

       

      
            </div>
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