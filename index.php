<!-- Home page -->

<!-- header section include -->
<?php
     include_once 'header.php';
?>
    <!-- style sheet -->
    <link rel="stylesheet" href="css/home.css">

<!-- navigation section include -->
<?php
     include_once 'navigation.php';
?>

<!-- BODY -->

<!-- home section -->
    <section class="home">
        <!-- text -->
        <div class="text">
            <h1 style="color: #3b96fe;">HI </h1>
                <?php
                if (isset($_SESSION["uuname"])) {
                    echo '<h1>'. $_SESSION["uuname"].'<h1>';
                    echo '<h1>Enjoy your ride with us</h1>';
                    echo '<h3>Up to 25% discount...</h3> <p>Discover the ultimate car rental experience with our premier service. From a diverse fleet of well-maintained vehicles to a user-friendly website, we prioritize your satisfaction. With flexible bookings, exceptional customer service, competitive rates, and comprehensive packages, we ensure a stress-free and enjoyable journey on the open road. Book now and experience the freedom!</p>';
                }
                else {
                    echo '<h1>Enjoy your ride with us</h1>';
                    echo '<h3>Up to 25% discount...</h3> <p>Discover the ultimate car rental experience with our premier service. Register on our user-friendly website to unlock a diverse fleet of well-maintained vehicles. We prioritize your satisfaction, offering flexible bookings, exceptional customer service, competitive rates, and comprehensive packages. Embark on a stress-free and enjoyable journey on the open road. Book now and experience the freedom!</p>';
                }
                
                ?>
            <div class="store">
                <img src="Images/app-store playstore.png" alt="store logo">
            </div>
        </div>
        <!-- image slider -->
        <div class="slider-container">
                <img class="slider-image" src="Images/homepage-car.png" alt="Car Image">
                <img class="slider-image" src="Images/homepage-car1.png" alt="Car Image">
                <img class="slider-image" src="Images/homepage-car2.png" alt="Car Image">
                <img class="slider-image" src="Images/homepage-car3.png" alt="Car Image">
        </div>
        <!-- search bar -->
        <div class="search-box">
            <input type="text" placeholder="Search...">
            <a href="#">Search</a>
        </div>
    </section>
</body>

<!-- footer section include -->
<?php
     include_once 'footer.php';
?>