<!DOCTYPE html>
<html>

<head>
  <title>Vendor Panel</title>
  <link rel="stylesheet" href="../css/vendor_panel.css">
  <?php require "./db_con.php"; ?>
</head>

<body>
  <?php
  session_start(); // start session
  

  if (!isset($_SESSION['vendor_id'])) {
    header("Location: vendorlogin.php");
    exit();
  }

  $vendor_id = $_SESSION['vendor_id'];
  $query = "SELECT name FROM vendor_info WHERE id = $vendor_id";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  $username = $row['name'];

  $vendor_id = $_SESSION['vendor_id'];
  $query = "SELECT name FROM vendor_info WHERE id = $vendor_id";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  $username = $row['name'];

  // Redirect to login page if not logged in
  if (!isset($_SESSION['vendor_id'])) {
    header("Location: vendorlogin.php");
    exit();
  }
  ?>

  <div id="main" class="main">
    <div id="sidebar" class="sidebar">
      <h2>Welcome,
        <?php echo $username ?>
      </h2>
      <a href="./vendor_profile.php">Profile</a>
      <a href="./vendor_Edit_Profile.php">Edit Profile</a>
      <a href="./vendor_settings.php">Settings</a>
      <a href="vendorlogout.php" id="logout">Logout</a>
    </div>


    <div class="content" style = "align-items: center;">
      <h1>Welcome to admin Panel </h1>
    </div>

  </div>

 
