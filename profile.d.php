<!-- Home page -->

<!-- header section include -->
<?php
     include_once 'header.php';
?>
    <!-- style sheet -->
    <link rel="stylesheet" href="css/profile.css">

<!-- navigation section include -->
<?php
     include_once 'navigation.php';
?>

<!-- BODY -->
<section>
  <div class="form-box">
    <div class="form-value">
        <h2>Profile</h2>
        <p>
          <?php
          
            echo $_SESSION["did"].'<br>';
            echo $_SESSION["duname"].'<br>';
            echo $_SESSION["dNIC"].'<br>';
            echo $_SESSION["demail"].'<br>';
            echo $_SESSION["dPhonenumber"].'<br>';
            echo $_SESSION["dDOB"].'<br>';
          
          ?>
          <button type="submit" class="edit">Edit</button>
          <button type="submit" class="delete">delete</button>
        </p>
    </div>
  </div>
</section>
</body>

<!-- footer section include -->
<?php
     include_once 'footer.php';
?>