<?php 
// Configuration 
$host = 'localhost'; 
$dbUsername = 'root'; 
$dbPassword = 'mysql'; 
$dbName = 'coffee-project'; 
 
// Start a session 
session_start(); 
 
// Create a database connection 
$connection = new mysqli($host, $dbUsername, $dbPassword, $dbName); 
 
// Check the connection 
if ($connection->connect_error) { 
    die('Connection failed: ' . $connection->connect_error); 
} 
 
// Check if the user is already logged in 
if (isset($_SESSION['user_id'])) { 
    // Redirect to a welcome page or any other protected page 
    header('Location: login.php'); 
    exit(); 
} 
 
// Register a user 
if (isset($_POST['username'])) { 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $confirmPassword = $_POST['confirm_password']; 
 
    // Perform some basic validation on the input 
    if (empty($username) || empty($password) || empty($confirmPassword)) { 
        echo 'Please fill in all the fields.'; 
    } elseif ($password !== $confirmPassword) { 
        echo 'Passwords do not match.'; 
    } else { 
        // Check if the username already exists 
        $query = "SELECT * FROM users WHERE username='$username'"; 
        $result = $connection->query($query); 
 
        if (isset($result->num_rows) && $result->num_rows > 0) { 
            echo 'Username already exists. Please choose a different username.'; 
        } else { 
            // Insert the new user into the database 
            $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')"; 
            $insert = $connection->query($query); 
 
            if ($insert) { 
                // Fetch the user ID 
                $user_id = $connection->insert_id; 
 
                // Set session variables 
                $_SESSION['user_id'] = $user_id; 
                $_SESSION['username'] = $username; 
 
                // Redirect to a welcome page or any other protected page 
                header('Location: login.php'); 
                exit(); 
            } else { 
                echo 'Error: ' . $connection->error; 
            } 
        } 
    } 
} 
 
 
// Close the database connection 
$connection->close(); 
?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Login Form </title>
  <link rel="stylesheet" href="CSS/stylelogin.css">
</head>
<body>
  <header>  <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="/img/logo-label.svg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php">Course</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="login.php">login</a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav></header>
  <div class="wrapper">
    <form action="register.php" method="post">
      <h2>Register</h2>
      <!-- <div class="input-field">
        <input type="text" required>
        <label>Enter your Id number</label>
      </div> -->
        <div class="input-field">
        <input type="text" name="username" id="username" required>
        <label>Enter your username</label>
      </div>
      <div class="input-field">
        <input type="password" name="password">
        <label>Enter your password</label>
      </div>
      <div class="input-field">
        <input type="password"name="confirm_password" required>
        <label>Repeat your password </label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#"></a>
      </div>
      <a href=""><button type="submit">Register</button></form></a>
      <div class="register"> 
        <p>Do you already have account?! <a href="/simplecoffee/simplecoffeeacademy/login.php">login</a></p>
      </div>
    </form>
  </div>
</body>
</html>