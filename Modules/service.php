<?php require '../Templates/Header.php';
require '../Templates/Nav.php' ?>



<div id="login-options" style="display:none;">
    <button id="user-login-btn">User Login</button>
    <button id="vendor-login-btn">Vendor Login</button>
</div>

<div class="vendor">
    <h1>Our Vendors</h1>


    <div class="header">
        <div class="nav">
            <ul>
                <li><a href="#" class="active" data-filter="all">All</a></li>
                <?php
                // Assuming you have established a database connection, you can execute the following query to get the category names
                $query = "SELECT DISTINCT category_name FROM category";

                // Execute the query
                $result = mysqli_query($conn, $query);

                // Check if any rows were returned
                if (mysqli_num_rows($result) > 0) {
                    // Loop through the rows and print a list item for each category name
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li><a href="#" data-filter="' . $row['category_name'] . '">' . $row['category_name'] . '</a></li>';
                    }
                } else {
                    // If no rows were returned, print a message
                    echo '<li>No categories found.</li>';
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            </ul>
        </div>
    </div>

    <div class="vendor-container product-list active">
        <div class="vendor-card">
            <img src="https://via.placeholder.com/300x200" alt="Vendor 1">
            <h2>Vendor 1</h2>
            <p>Address: 123 Main St.</p>
            <p>Experience: 10 years</p>
            <a href="#" class="button">Read More</a>
        </div>


        <div class="vendor-card product-item category1">
            <img src="https://via.placeholder.com/300x200" alt="Vendor 1">
            <h2>Vendor 1</h2>
            <p>Address: 123 Main St.</p>
            <p>Experience: 10 years</p>
            <a href="#" class="button">Read More</a>
        </div>

        <div class="vendor-card product-item category2">
            <img src="https://via.placeholder.com/300x200" alt="Vendor 1">
            <h2>Vendor 1</h2>
            <p>Address: 123 Main St.</p>
            <p>Experience: 10 years</p>
            <a href="#" class="button">Read More</a>
        </div>
        <div class="vendor-card product-item category3">
            <img src="https://via.placeholder.com/300x200" alt="Vendor 2">
            <h2>Vendor 2</h2>
            <p>Address: 456 Elm St.</p>
            <p>Experience: 5 years</p>
            <a href="#" class="button">Read More</a>
        </div>

        <div class="vendor-card product-item  category1 ">
            <img src="https://via.placeholder.com/300x200" alt="Vendor 3">
            <h2>Vendor 3</h2>
            <p>Address: 789 Oak St.</p>
            <p>Experience: 8 years</p>
            <a href="#" class="button">Read More</a>
        </div>
        <div class="vendor-card category1 ">
            <img src="https://via.placeholder.com/300x200" alt="Vendor 3">
            <h2>Vendor 3</h2>
            <p>Address: 789 Oak St.</p>
            <p>Experience: 8 years</p>
            <a href="#" class="button">Read More</a>
        </div>

    </div>
</div>
<div class="service-page">
    <h1 class="heading">Our Services</h1>


    <div class="service-content">

        <div class="col">
            <h1>Packages</h1>


            <div class="container">
                <div class="row">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Card Image">
                        <h3>Card 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="button">Read More</a>
                    </div>
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Card Image">
                        <h3>Card 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="button">Read More</a>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Card Image">
                        <h3>Card 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="button">Read More</a>
                    </div>
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Card Image">
                        <h3>Card 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="button">Read More</a>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Card Image">
                        <h3>Card 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="button">Read More</a>
                    </div>
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Card Image">
                        <h3>Card 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="button">Read More</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="offer">
            <h1>Offers</h1>

            <div class="offer-card">
                <img src="https://via.placeholder.com/300x200" alt="Card Image">
                <h3>Card 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="button">Read More</a>
            </div>

        </div>
    </div>
</div>

<?php require '../Templates/footer.php'; ?>