<?php
include_once 'header.php';
?>
<!--  style sheet  -->
<link rel="stylesheet" href="css/contact.css">

<style>
    footer {
        margin-top: 35%;
    }
</style>

<!--    navigation section include    -->
<?php
include_once 'navigation.php';
?>

 <div class="allmy">

     <div class="d1">

         <div class="h2">
             <h2>CONTACT QUICKDRIVE RENT A CAR</h2>
         </div>

         <div class="p1">
             <p><strong>Wanting to rent a car through QUICKDRIVE drive a car (pvt) Ltd <br> do take note of the contact details mentioned below</strong></p>
         </div>
         <h3><u>Call Us For Get Quick Response</u></h3>

         <form action="" method="POST">

             <div class="box">
                 <label><b>Your name*</b></label>
                 <input aria-label="Your Name" type="text" name="name" class="cf1">
                 <label><b>Your e-mail*</b></label>
                 <input aria-label="Your E-mail" type="email" name="email" class="cf2">
                 <label><b>Your Telephone Number</b></label>
                 <input aria-label="Telephone Number" type="text" name="phone_number" class="cf3">
                 <label><b>Basis of hire*</b></label>
                 <input aria-label="Basis of hire" type="text" placeholder="with driver/self driver" name="basis_of_hire" class="cf1">
                 <label><b>Message*</b></label>
                 <input aria-label="Message" type="text" name="message" class="cf4">
                 <button type="submit">Submit</button>
             </div>
         </form>

         <div class="anime">

<h1>
  <span id="animatedText"></span>
</h1>
</div>
<script >

var animatedText = document.getElementById('animatedText');
var texts = ['CONTACT','US!'];
var currentIndex = 0;

function animateText() {
    animatedText.textContent = texts[currentIndex];
    animatedText.classList.add('animate-text');
    currentIndex = (currentIndex + 1) % texts.length;

    setTimeout(function() {
        animatedText.classList.remove('animate-text');
        setTimeout(animateText, 1000);
    }, 500);
}

animateText();


</script>
 
         <div class="p3">
             <p>QUICKDRIVE rent a car (pvt.)Ltd <br> no 58 Tangalle Road,<br> Matara,<br>Sri Lanka.</p>
             <br>
             <p>phone</p>
             <p>+94 412222226</p>
             <p>infor@saman_rent.lk</p>
         </div>
     </div>

     <div class="mapouter">
         <div class="gmap_canvas">
             <iframe class="gmap_iframe" width="300px" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=309&amp;height=383&amp;hl=en&amp;q=colombo&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
             </iframe>
         </div>
     </div>
  </div>

 <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // retrieve form data
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone_number = $_POST['phone_number'];
     $basis_of_hire = $_POST['basis_of_hire'];
     $message = $_POST['message'];

    // validate and sanitize the data (optional)
    // ...

    // Connect to your database (replace placeholders with actual values)
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "carrental";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute an SQL query to insert the data into the database
    $sql = "INSERT INTO contactus (name, email, phone_number, basis_of_hire, message)
            VALUES ('$name', '$email', '$phone_number', '$basis_of_hire', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
     $conn->close();
 }

 include_once 'footer.php';
 ?>