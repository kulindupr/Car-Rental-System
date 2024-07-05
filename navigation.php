</head>
<body>

  <header>
    <a href="index.php"><div class="logo"><img src="images/logo carrental.png" alt="logo" length="277px", width="120px"></div></a>
    <a href="index.php"><h1 class="logoText">QuickDrive</h1></a>
    <div class="headerButtons">

    <?php
        if (isset($_SESSION["uuname"])) {
            echo '<a href="include/logout.inc.php" class="log">Log out</a>  <a href="profile.u.php" class="log">'. $_SESSION["uuname"].'</a>';
        }
        else if (isset($_SESSION["duname"])) {
            echo '<a href="include/logout.inc.php" class="log">Log out</a>  <a href="profile.d.php" class="log">'. $_SESSION["duname"].'</a>';
        }
        else {
            echo '<a href="registeras.php" class="sign">Sign Up</a><a href="loginas.php" class="log">Log in</a>';
        }
                
    ?>
 
    </div>
</header>

<nav>
    <ul class="navigationBar">
        <li><a href="index.php">Home</a></li>
        <li><a href="rental.php">Rental</a></li>
        <li><a href="cars.php">Cars</a></li>
        <li><a href="driver.php">Drivers</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="carreers.php">Careers</a></li>
        <a href="help_and_support.php" class="helpButton">Help</a>
    </ul>
</nav>