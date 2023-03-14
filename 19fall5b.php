<?php
    $servername = "localhost";
    $username = "yourusername";
    $password = "yourpassword";
    $dbname = "yourdatabase";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    // Next file 
session_start(); // Start session
include "db.php"; // Include database connection file

// Check if form is submitted
if($_SERVER['REQUEST_METHOD'] == "POST") {
    
  $email = mysqli_real_escape_string($conn, $_POST['email']); // Escape email input to prevent SQL injection
  $password = mysqli_real_escape_string($conn, $_POST['password']); // Escape password input to prevent SQL injection

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'"; // SQL query to check if user exists

  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) == 1) { // If user exists, set session variables and redirect to homepage
    $_SESSION['email'] = $email;
    header("Location: homepage.php");
  } else { // If user doesn't exist, show error message
    echo "Invalid login credentials";
  }
}

mysqli_close($conn); // Close database connection
?>