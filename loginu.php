<!-- Login page -->

<!-- header section include -->
<?php
     include_once 'header.php';
?>
    <!-- style sheet -->
    <link rel="stylesheet" href="css/loginu.css">

<!-- navigation section include -->
<?php
     include_once 'navigation.php';
?>

<!-- BODY -->

<section>
  <div class="form-box">
    <div class="form-value">
      <form action="include/loginu.inc.php" method="post">
        <h2>Login as User</h2>
        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="email" name='email' required>
          <label for="">Email</label>
        </div>
        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" name='pwd' required>
          <label for="">Password</label>
        </div>
        <button name="submit" type="submit">Log in</button>
        
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
          <p style="font-size: 15px;">Don't have a account <a href="registeras.php" style="color: red;">Register</a></p>
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