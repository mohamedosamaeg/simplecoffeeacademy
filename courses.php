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
    <link rel="icon" href="images/icon.svg" type="image/x-icon">
    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Simple Coffee Academy</title>
    <!--End Custom Css-->
</head>

<body>

   
    <!--Header Start-->
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
                            <a class="nav-link active" aria-current="page" href="indexacademy.php">Home</a>
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
       
       <!--Navbar End-->
   </header>
    <!--Header End-->


    
    <section class="blogs" id="blogs">

        <h1 class="heading">  </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/blog-1.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Barista:</a>
                    <span>Course: "Barista Training and Techniques" on Udemy</span>
                    <p>[Udemy - Barista Training and Techniques].</p>
                    <a href="https://www.udemy.com/course/barista-training-and-techniques/" class="btn">Enroll</a>
                </div>
               
                
               
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-2.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Trainee:</a>
                    <span>Course:"Introduction to Coffee Basics" on Coffee Skills Program</span>
                    <p> [Coffee Skills Program - Introduction to Coffee Basics].</p>
                    <a href="https://www.sca.coffee/education/coffee-skills-program" class="btn">Enroll</a>
                </div>
                
   
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/blog-3.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Manager:</a>
                    <span>Course: "Coffee Shop Management" on LinkedIn Learning</span>
                    <p>[LinkedIn Learning - Coffee Shop Management]</p>
                    <a href="https://www.linkedin.com/learning/coffee-shop-management" class="btn">Enroll</a>
                </div>
            </div>
      

        </div>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/blog-1.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Supervisor:</a>
                    <span>Course: "Leadership in Hospitality" on Coursera by ESSEC Business School</span>
                    <p>[Coursera - Leadership in Hospitality]</p>
                    <a href="https://www.coursera.org/learn/leadership-in-hospitality" class="btn">Enroll</a>
                </div>
            </div>
            
            

            <div class="box">
                <div class="image">
                    <img src="images/blog-2.jpeg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">HR:</a>
                    <span>Course: "Human Resources in the Hospitality Industry" on edX by Cornell University</span>
                    <p>[edX - Human Resources in the Hospitality Industry]</p>
                    <a href="https://www.edx.org/professional-certificate/human-resources-in-the-hospitality-industry
                    " class="btn">Enroll</a>
                </div>
            </div>

            

    </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center py-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2024 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Simple Coffee Academy</a>
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