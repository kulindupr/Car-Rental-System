<!-- signup user page -->

<!-- header section include -->
<?php
     include_once 'header.php';
?>
    <!-- style sheet -->
    <link rel="stylesheet" href="css/signupu.css">

<!-- navigation section include -->
<?php
     include_once 'navigation.php';
?>

<!-- BODY -->

<section>
  <div class="form-box">
    <div class="form-value">
      <form action="include/signupu.inc.php" method="post">
        <h2>User registration</h2>
        <div class="inputbox">
            <input type="text" name='name' required>
            <label for="name">Full name</label>
        </div>
        <div class="inputbox">
          <input type="text" name='NIC' required>
          <label for="NIC">NIC</label>
        </div>
        <div class="inputbox">
            <input type="email" name='email' required>
            <label for="email">Email</label>
        </div>
        <div class="inputbox">
          <input type="tel" name='Phonenumber' pattern="[0-9]{10}" required>
          <label for="Phonenumber">Phone number</label>
        </div>
        <div class="inputbox">
          <input type="date" name='DOB' required>
          <label for="DOB">Date of birth</label>
        </div>
        <div class="inputbox">
            <input type="password" name='pwd' required>
            <label for="password">Password</label>
        </div>
        <div class="inputbox">
            <input type="password" name='pwdrepeat' required>
            <label for="password">Confirm password</label>
        </div>

        <button name="submit" type="submit">Register</button>

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