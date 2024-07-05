<!-- Driver Job Application -->

<!-- header section include -->
<?php
     include_once 'header.php';
?>
    <!-- style sheet -->
    <link rel="stylesheet" href="Css/driver.css">

<!-- navigation section include -->
<?php
     include_once 'navigation.php';
?>




<?php
     //Database connection details
     $servername = "localhost";
     $username = "test@gmail.com";
     $password = "6O339/PV(ZS7/[*d";
     $dbname = "carrental";
     
     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     
     // Check connection
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     } 
     echo"Connected successfully !";


     




     
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $idNumber = $_POST['id_number'];
    $age = $_POST['age'];
    $licenceNo = $_POST['licence_no'];

    if(empty($firstName)||  empty($lirstName))
    {


    }
    else{
        echo"EMPTY!";
        die();
    }



    

$sql = "INSERT INTO driver_job (first_name, last_name, email, phone_number, address, gender, id_number, age, licence_no)
VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$address', '$gender', '$idNumber', '$age', '$licenceNo')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
echo "Application submitted successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// Close the database connection
$conn->close();
?>







<!-- BODY -->

<div class="container">
     <div class="apply_box">
        <h1>Driver Job Application</h1>
        <!--form-->
        <form action="jobdriver.php" method="post">
            <div class="form_container">
                <div class="form_controler">
                    <label for="first_name">First Name</label>
                    <input id="first_name" name="first_name" placeholder="Enter First Name..." />
                </div>
                
                <div class="form_controler">
                    <label for="last_name">Last Name</label>
                    <input id="last_name" name="last_name" placeholder="Enter Last Name..." />
                </div>
                
                <div class="form_controler">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email..." />
                </div>
                
                <div class="form_controler">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" placeholder="Enter Phone Number..." />
                </div>
                
                <div class="form_controler">
                   <p><label for="address">Address</label></p>
                    <textarea id="address" name="address" rows="4" cols="50" placeholder="Enter Address..."></textarea>
                </div>

                <div class="form_controler">
                    <label for="gender" class="gender">Gender</label>
                    <select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="form_controler">
                    <label for="id-number">ID Number</label>
                    <input type="text" id="id-number" name="id_number" placeholder="Enter Id number..." />
                </div>

                <div class="form_controler">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" placeholder="Enter Age..." />
                </div>

                <div class="form_controler">
                    <label for="licence_no">Licence Card Number</label>
                    <input type="text" id="licence_no" name="licence_no" placeholder="Enter Licence no..." />
                </div>

                <div class="button_container">
                    <button type="submit" id="apply_now">Apply Now</button>
                </div>
                
                


            </div>
        </form>
     </div>
</div>




    





<!-- footer section include -->
<?php
     include_once 'footer.php';
?>
----