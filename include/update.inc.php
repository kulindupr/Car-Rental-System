<!-- Home page -->

<!-- header section include -->
<?php
     include_once '../header.php';
?>
    <!-- style sheet -->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/footer.css">

<!-- navigation section include -->
<?php
     include_once '../navigation.php';
?>

<?php
    require_once 'dbh.inc.php';
    require_once 'function.inc.php';
    if($_SESSION["role"] == "driver"){
        $row = loadDriver($conn,$_SESSION["uid"]);
    }else{
        $row = loadUser($conn,$_SESSION["uid"]);
    }
    if (isset($_POST["submit"])) {
        $userID = $_SESSION["uid"];
        $name = $_POST["name"];
        $NIC = $_POST["NIC"];
        $email = $_POST["email"];
        $phoneNumber = $_POST["phoneNumber"];
        $DOB = $_POST["DOB"];
        $pwd = $_POST["pwd"];
        if($_SESSION["role"] == "driver"){
            updateDriver($conn, $userID, $name, $NIC, $email, $phoneNumber, $DOB, $pwd);
        }else{
            updateUser($conn, $userID, $name, $NIC, $email, $phoneNumber, $DOB, $pwd);
        }
    }
?>

<!-- BODY -->


<?php
if($_SESSION["role"] == "driver"){ ?>
<section>
  <div class="form-box">
  <form method="POST">
  <h2>Driver Profile</h2>
        
        <div class="inputbox">
    <input type="hidden" name="userID" value="123"> 
    <input type="text" name="name" placeholder="Driver Name" value=<?php echo $row["dname"];?> >
    <input type="text" name="NIC" placeholder="NIC" value=<?php echo $row["NIC"];?>>
    <input type="email" name="email" placeholder="Email" value=<?php echo $row["email"];?> >
    <input type="tel" name="phoneNumber" placeholder="Phone Number" value=<?php echo $row["Phonenumber"];?>>
    <input type="date" name="DOB" placeholder="Date of Birth" value=<?php echo $row["DOB"];?>>
    <input type="password" name="pwd" placeholder="Password" required>

    <button type="submit" name="submit">Update Driver</button>
    </div>
    </div>
  </div>
</form>
</section>
</body>
<?php
} else {?>
<section>
  <div class="form-box">
<form method="POST">
  <h2>User Profile</h2>
        
        <div class="inputbox">
    <input type="hidden" name="userID" value="123">
    <input type="text" name="name" placeholder="Name" value=<?php echo $row["uname"];?> >
    <input type="text" name="NIC" placeholder="NIC" value=<?php echo $row["NIC"];?>>
    <input type="email" name="email" placeholder="Email" value=<?php echo $row["email"];?> >
    <input type="tel" name="phoneNumber" placeholder="Phone Number" value=<?php echo $row["Phonenumber"];?>>
    <input type="date" name="DOB" placeholder="Date of Birth" value=<?php echo $row["DOB"];?>>
    <input type="password" name="pwd" placeholder="Password" required>

    <button type="submit" name="submit">Update User</button>
    </div>
    </div>
  </div>
</form>
</section>
</body>

<?php
}
?>


<!-- footer section include -->
<?php
     include_once '../footer.php';
?>