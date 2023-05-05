<?php
session_start(); // start session

require "db_con.php";

$username = $_POST['vendor_email'];
$password = $_POST['vendor_password'];

// Prepare SELECT query to check username in name column
$stmt = $conn->prepare("SELECT * FROM vendor_info WHERE name = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Username found in name column, check password
    $row = $result->fetch_assoc();
    if ($password == $row['password']) {
        $_SESSION['vendor_name'] = $row['name']; // store vendor name in session
        $_SESSION['vendor_id'] = $row['id']; // store vendor id in session
// store vendor id in session

        // after verifying username and password
        header("Location: vendour_panel.php?vendor_id=" . $row['id']);
        // redirect to vendor panel page
        
    } else {
        echo "<script>alert('Invalid Password!!'); window.location.href='vendourlogin.php';</script>";
        exit();
    }
} else {
    // Username not found in name column, check in email column
    $stmt = $conn->prepare("SELECT * FROM vendor_info WHERE email = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // Username found in email column, check password
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            $_SESSION['vendor_name'] = $row['name']; // store vendor name in session
            $_SESSION['vendor_id'] = $row['id']; // store vendor id in session
// store vendor id in session

            // after verifying username and password
            header("Location: vendour_panel.php?vendor_id=" . $row['id']);
            // redirect to vendor panel page
            
        } else {
            echo "<script>alert('Invalid Password!!'); window.location.href='vendourlogin.php';</script>";
            exit();
        }
    } else {
        // Username not found in name or email columns
        echo "<script>alert('Invalid Username!!'); window.location.href='vendourlogin.php';</script>";
        exit();
    }
}
?>