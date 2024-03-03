<?php

require './db_con.php';
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Retrieve the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $category = $_POST["category"];
  $contact_name = $_POST["contact_name"];
  $phone_number = $_POST["phone_number"];
  $address = $_POST["address"];

  // Escape user input data to prevent SQL injection
  $name = mysqli_real_escape_string($conn, $name);
  $email = mysqli_real_escape_string($conn, $email);
  $password = mysqli_real_escape_string($conn, $password);
  $category = mysqli_real_escape_string($conn, $category);
  $contact_name = mysqli_real_escape_string($conn, $contact_name);
  $phone_number = mysqli_real_escape_string($conn, $phone_number);
  $address = mysqli_real_escape_string($conn, $address);
  

  // Check if the entered business name or email already exists in the vendor_info table
  $sql = "SELECT * FROM vendor_info WHERE name='$name' OR email='$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // The business name or email already exists in the table
    echo "<script>alert('Business name or email already exists! You can Login');  window.location.href='vendourlogin.php';</script>";
  } else {
    // Insert the data into the database
    $sql = "INSERT INTO vendor_info (name, email, password, category, contact_name, phone_number, address) 
    VALUES ('$name', '$email', '$password', '$category', '$contact_name', '$phone_number', '$address')";
     if (mysqli_query($conn, $sql)) {
      // Create a new table with the name "vendor_id"
      $vendor_id = mysqli_insert_id($conn);
      $table_name = "vendor_" . $vendor_id;
      $sql = "CREATE TABLE $table_name (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        event_name VARCHAR(50) NOT NULL,
        event_price DECIMAL(10,2) NOT NULL,
        event_description TEXT,
        event_image VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        location VARCHAR(100),
        people_handled INT(11)
      )";
      mysqli_query($conn, $sql);

      // Alert the user and redirect to the login page
      echo "<script>alert('Account created successfully! You can login now!'); window.location.href='vendourlogin.php';</script>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  // Close the database connection
  mysqli_close($conn);
}
?>