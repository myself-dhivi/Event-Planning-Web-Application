<?php

require "./db_con.php";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Retrieve the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Escape user input data to prevent SQL injection
  $name = mysqli_real_escape_string($conn, $name);
  $email = mysqli_real_escape_string($conn, $email);
  $password = mysqli_real_escape_string($conn, $password);

  // Check if the entered username or email already exists in the user_info table
  $sql = "SELECT * FROM user_info WHERE name='$name' OR email='$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // The username or email already exists in the table
    echo "<script>alert('Username or email already exists! You can Login');  window.location.href='userlogin.php';</script>";
  } else {
    // Insert the data into the database
    $sql = "INSERT INTO user_info (name, email, password) VALUES ('$name', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
      // Alert the user and redirect to the login page
      echo "<script>alert('Account created successfully! You can login now!'); window.location.href='userlogin.php';</script>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  // Close the database connection
  mysqli_close($conn);
}

?>
