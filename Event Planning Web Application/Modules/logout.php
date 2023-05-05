<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['user_name'])) {
    // User is logged in, unset session variables
    unset($_SESSION['user_name']);
    // Destroy session
    session_destroy();
    // Redirect to homepage or login page
    header("Location: index.php");
    exit();
}else{
    echo "some promblem";
}
?>
