<?php 
require './vendour_panel.php';
require './db_con.php'; 

// Assume that you have a database table named 'users' with the following columns: 
// id, profile_picture, name, email, password, category, contact_name, phone_number, and address

// Retrieve the user's information from the database
$query = "SELECT * FROM vendor_info WHERE id = 1"; // Replace '1' with the user's ID
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

// If the user does not have a profile picture, use a placeholder image
$profile_picture = $user['profile_picture'] ? $user['profile_picture'] : 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F7%2F7c%2FProfile_avatar_placeholder_large.png%3F20150327203541&tbnid=gp8LDHLwxDk-WM&vet=12ahUKEwiv9I7x-9H-AhVfCbcAHb87A1gQMygBegUIARDwAQ..i&imgrefurl=https%3A%2F%2Fcommons.wikimedia.org%2Fwiki%2FFile%3AProfile_avatar_placeholder_large.png&docid=xZyB11jLps67TM&w=360&h=360&q=profile%20picture%20placeholder&ved=2ahUKEwiv9I7x-9H-AhVfCbcAHb87A1gQMygBegUIARDwAQ';

?>

<div class="content">
    
    <div class="profile">
        <img src=    "../image/vendour/profile/<?php echo $profile_picture; ?>" alt="Profile Picture" class="rounded" width="200" height="200">
        <h1><?php echo $user['name']; ?></h1>
        <p><?php echo $user['email']; ?></p>
        <p><?php echo $user['category']; ?></p>
        <p><?php echo $user['contact_name']; ?></p>
        <p><?php echo $user['phone_number']; ?></p>
        <p><?php echo $user['address']; ?></p>
    </div>
</div>

<style>
    .rounded {
        border-radius: 50%;
    }
    .profile {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>
