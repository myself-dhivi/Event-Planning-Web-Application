<?php

session_start();


?>



<header>
    <div class="logo">
        <h1>Event Organizer</h1>
    </div>
    <nav>
        <ul>
            <li><a href="../Modules/index.php" class="active">Home</a></li>
            <li><a href="../Modules/index.php#about">About Us</a></li>
            <li><a href="../Modules/service.php">Services</a></li>
            <li><a href="../Modules/index.php#contact">Contact Us</a></li>
            <?php
            if (!isset($_SESSION['user_name'])) {
                // user is not logged in, display login link
                ?>
                <li><a href="#" id="login-link">Login</a></li>
                <?php
            } else {
                // user is logged in, display dropdown button
                ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome,
                        <?php echo $_SESSION['user_name']; ?> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="../Modules/logout.php">Logout</a></li>
                    </ul>
                </li>

            <?php } ?>


        </ul>
    </nav>
</header>