<!-- profile user page -->

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

<?php

if(isset($_POST["edit"])){
  header("Location:include/update.inc.php");
} 

if(isset($_POST["delete"])){
  require_once 'include/dbh.inc.php';
  require_once 'include/function.inc.php';
  deleteUser($conn, $_SESSION["uid"]);
}

?>
<!-- BODY -->
<section>
  <div class="form-box">
  <form method="POST">
    <div class="form-value">
        <h2>Profile</h2>
        <p>
          <?php
          
            echo 'ID :  '. $_SESSION["uid"].'<br><br>';
            echo 'Name :     '. $_SESSION["uuname"].'<br><br>';
            echo 'NIC :     '. $_SESSION["uNIC"].'<br><br>';
            echo 'Email :     '. $_SESSION["uemail"].'<br><br>';
            echo 'Phonenumber :     '. $_SESSION["uPhonenumber"].'<br><br>';
            echo 'Date of birth :     '. $_SESSION["uDOB"].'<br><br>';
          ?>
        </p>
          <input type="submit" value="Edit" class="but" name="edit">
          <input type="submit" value="Delete" class="but" name="delete">
        
    </div>
  </div>
  </form>
</section>
</body>

<!-- footer section include -->
<?php
     include_once 'footer.php';
?>