<?php
$user = isset($_POST['user']) ? $_POST['user'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';
$emp_a = "enter name and password";
$emp_u = "please enter your NAME";
$emp_p = "please enter your Password";

if (!empty($user) && !empty($pass)) {
    if ($user === "fathey" && $pass === "123654") {
        header("Location: admin_dashbord.html");
    } elseif ($user === "Madonna" && $pass === "123654") {
        header("Location: clint_dashbord.html");
    } elseif ($user === "bassem" && $pass === "123654") {
        header("Location: protofly_user_b.html");
    } elseif ($user === "adham" && $pass === "123654") {
        header("Location: protofly_user_l.html");
    }
} else {
    echo $emp_a;
}

?>
<!-- rest of your HTML code -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="sign.css">
    <title>signin-signup</title>
</head>

<body>
    <div class="container">
        <div class="signin-signup">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                <h2 class="title">Sign in</h2>

                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="email" name="user">
                </div>


                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="password" name="pass">
                </div>

                <?php
                if(empty($user) && empty($pass)){
                    echo$emp_a;}
                else
                {
                    if(empty($user)){
                        echo $emp_u;
                    }elseif(empty($pass)){
                        echo $emp_p;
                    }  
                }

                // $error= mysqli_connect_error();
                // if(!$con){
                //     echo "error".$error;
                // }

                ?>

                <input type="submit" name="login" value="Login" class="btn">

                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
            </form>
            <span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>



            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="sign-up-form">
                <h2 class="title">Sign up</h2>

                

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
                    <span class="text-danger"><?php if (isset($uname_error)) echo $uname_error; ?></span>
				</div>

                
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
					<input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
					<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
				</div>


                <div class="input-field">
                  <i class="fas fa-lock"></i>
					<input type="password" name="password" placeholder="Password" required class="form-control" />
					<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
				</div>


                <div class="input-field">
                 <i class="fas fa-lock"></i>
					<input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
					<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
				</div>

                <input type="submit" name="signup" value="Sign Up" class="btn" />

                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>


            </form>
        </div>




        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Member of Brand?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="login/signin-signup/signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New to Brand?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="login/signin-signup/signup.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="login/app.js"></script>
</body>

</html>