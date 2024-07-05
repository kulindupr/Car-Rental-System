<!-- register as page -->

<!-- header section include -->
<?php
     include_once 'header.php';
?>
    <!-- style sheet -->
    <link rel="stylesheet" href="css/registrationas.css">

<!-- navigation section include -->
<?php
     include_once 'navigation.php';
?>

<!-- BODY -->

<section>
  <div class="form-box">
    <div class="form-value">
      <form action="include/signup.inc.php" method="post">
        <h2>registration as</h2>
        <div class="profile">
            <a href="signupu.php">
            <img src="images/puser.jpg" alt="profile img">
            <p>User</p>
            </a>
        </div>
        <div class="profile">
            <a href="signupd.php">
            <img src="images/pdriver.jpg" alt="profile img">
            <p>Driver</p>
            </a>
        </div>

        <?php
        if(isset($_GET["error"])){
          if ($_GET["error"] == "wrongloging"){
            echo '<div class="error"><p><br>Invalid details</p></div>';
          }
          elseif ($_GET["error"] == "invaliduid"){
            echo '<div class="error"><p><br>Invalid username</p></div>';
          }
          elseif ($_GET["error"] == "invalidemail"){
            echo '<div class="error"><p><br>Invalid Email</p></div>';
          }
          elseif ($_GET["error"] == "passwordsdontmatch"){
            echo '<div class="error"><p><br>Password does not match</p></div>';
          }
          elseif ($_GET["error"] == "usernametaken"){
            echo '<div class="error"><p><br>Username already taken</p></div>';
          }
          elseif ($_GET["error"] == "stmtfailed"){
            echo '<div class="error"><p><br>Something went wrong!</p></div>';
          }
          elseif ($_GET["error"] == "none"){
            echo '<div class="error"><p><br>Account Created</p></div>';
          }
        }
        ?>

        <div class="register">
          <p style="font-size: 15px;">Have an account <a href="loginas.php" style="color: red;" >Login</a></p>
        </div>
      </form>
    </div>
  </div>
</section>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


<!-- footer section include -->
<?php
     include_once 'footer.php';
?>