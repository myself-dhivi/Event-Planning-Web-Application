<?php
session_start(); // start session

require "db_con.php";

$username = $_POST['user_name'];
$password = $_POST['user_password'];

// Prepare SELECT query to check username in name column
$stmt = $conn->prepare("SELECT * FROM user_info WHERE name = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Username found in name column, check password
    $row = $result->fetch_assoc();
    if ($password == $row['password']) {
        $_SESSION['user_name'] = $row['name']; // store user name in session
        // store user id in session
        echo "<script>alert('sucessfully fucked!!');</script>";
        header("Location: index.php"); // redirect to index page
        exit();
    } else {
        echo "<script>alert('Invalid Password!!'); window.location.href='userlogin.php';</script>";
        exit();
    }
} else {
    // Username not found in name column, check in email column
    $stmt = $conn->prepare("SELECT * FROM user_info WHERE email = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // Username found in email column, check password
        $row = $result->fetch_assoc();
        if ($password == $row['password']) {
            $_SESSION['user_name'] = $row['name']; // store user name in session
            // store user id in session
            echo "<script>alert('sucessfully fucked!!');</script>";
            header("Location: index.php"); // redirect to index page
            exit();
        } else {
            echo "<script>alert('Invalid Password!!'); window.location.href='userlogin.php';</script>";
            exit();
        }
    } else {
        // Username not found in name or email columns
        echo "<script>alert('Invalid Username!!'); window.location.href='userlogin.php';</script>";
        exit();
    }
}
?>
