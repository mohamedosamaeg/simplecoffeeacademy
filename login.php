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
    header('Location: indexacademy.php'); 
    exit(); 
} 
 
// Login a user
if (isset($_POST['username'])) { 
  $username = $_POST['username']; 
  $password = $_POST['password']; 

  // Perform some basic validation on the input 
  if (empty($username) || empty($password)) { 
      echo 'Please fill in all the fields.'; 
  } else { 
      // Check if the username and password match 
      $query = "SELECT * FROM users WHERE username=? AND password=?";
      $stmt = $connection->prepare($query);
      $stmt->bind_param("ss", $username, $password);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result) { 
          if ($result->num_rows == 1) { 
              // Fetch the user ID 
              $row = $result->fetch_assoc(); 
              $user_id = $row['id']; 

              // Set session variables 
              $_SESSION['user_id'] = $user_id; 
              $_SESSION['username'] = $username; 

              // Redirect to a welcome page or any other protected page 
              header('Location: client_dashbord.php'); 
              exit(); 
          } else { 
              echo 'Invalid username or password.'; 
          } 
      } else {
          echo "Error executing the query: " . $connection->error;
      }
  } 
}


// Logout the user 
if (isset($_GET['logout'])) { 
    // Clear all session variables 
    session_unset(); 
 
    // Destroy the session 
    session_destroy(); 
 
    // Redirect to the login page 
    header('Location: login.php'); 
    exit(); 
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
  <link rel="stylesheet" href="/simplecoffee/simplecoffeeacademy/CSS/stylelogin.css">
  <link rel="icon" href="/images/icon.svg" type="/image/x-icon">

</head>
<body>
  <div class="wrapper">
    <form action="" method="post">
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" id="username" name="username" required />
        <label>Enter your username</label>
      </div>
      <div class="input-field">
        <input type="password" id="password" name="password" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit" value="login">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="/simplecoffee/simplecoffeeacademy/register.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>