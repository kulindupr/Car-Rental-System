<?php

/*session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect the user to the login page or show an error message
    header("Location: login.php");
    exit;
}*/

//check form submit
  if (isset($_POST['submit'])) {
    include 'connection.php';
 
//get data from database
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postalCode = $_POST['postalcode'];
    $date = $_POST['date'];

//file upload process(tempory name))
    $cvFileName = $_FILES['cvfile']['name'];
    $cvTmpName = $_FILES['cvfile']['tmp_name'];
    $cvUploadPath = "./uploads/" . $cvFileName;

//uploaded file to destination
    if (move_uploaded_file($cvTmpName, $cvUploadPath)) 
    {
      $sql = "INSERT INTO `mechanic_application` (First_Name, Last_Name, Email, Address, City, Postal_Code, Date, Cv_File)
              VALUES ('$firstName', '$lastName', '$email', '$address', '$city', '$postalCode', '$date', '$cvUploadPath')";
      if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Data inserted successfully")</script>';
      } else {
        echo "Error: " . mysqli_error($conn);
      }
    } else {
      echo "Error moving the uploaded file.";
    }

// Close the database connection
    mysqli_close($conn);
  }
  ?>


<?php
include 'header.php';
?>

    <title>Mechanic Job application</title>
    <style>
      * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
      }

      .hhh1 {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        text-align: center;
        color: aliceblue;
      }

      body {
        background-color: #ccc;
        background-image: url("images/mechanic\ 3.jpg");
        background-size: 100%;
        background-repeat: no-repeat;
      }
      .body-container {
        max-width: 900px;
        margin: 10px auto;
      }

      .applybox {
        max-width: 600px;
        padding: 20px;
        margin: 0px auto;
        margin-top: 50px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        background: #275679c2;
        box-shadow: 0 4 px 30px rgba(0, 0, 0, 0.1);
        border-radius: 30px;
      }

      .form-container {
        margin-top: 20px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
      }

      .form-control {
        display: flex;
        flex-direction: column;
      }

      label {
        font-size: 15px;
        margin-bottom: 5px;
        color: aqua;
      }

      input,
      select,
      textarea {
        padding: 6px 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 15px;
      }

      input:focus {
        outline-color: royalblue;
      }

      .button-container {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
      }

      button {
        background-color: aqua;
        color: black;
        border: transparent solid 2px;
        /* border-radius: 8px;*/
        padding: 8px 12px;
      }

      button:hover {
        background-color: #ff578b;
        border: 2px solid royalblue;
        /*  transition: 0.3s ease-out;*/
        cursor: pointer;
      }

      .textarea-control {
        grid-column: 1 / span 2;
      }
      .textarea-control textarea {
        width: 100%;
      }

      @media (max-width: 460px) {
        .textarea-control {
          grid-column: 1 / span 1;
        }
      }
      .upload-control {
        display: flex;
        flex-direction: column;
        color: #98dfff;
      }

      .ppp {
        font-size: 15px;
        color: #98dfff;
      }
    </style>

<?php 
include_once 'navigation.php'; 
?>

    <div class="body-container">
      <div class="applybox">
        <h1 class="hhh1">MECHANIC APPLICATION</h1>

        <form actions="" method="post" enctype="multipart/form-data">
          <div class="form-container">
            <div class="form-control">
              <label for="first-name">First Name :</label>
              <input
                type="text"
                id="first-name"
                name="first-name"
                placeholder="Enter First Name" autocomplete="off" required
              />
            </div>

            <div class="form-control">
              <label for="last-name">Last Name :</label>
              <input
                type="text"
                id="last-name"
                name="last-name"
                placeholder="Enter Last Name" autocomplete="off" required
              />
            </div>

            <div class="form-control">
              <label for="email">Email :</label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter Email" autocomplete="off" required
              />
            </div>

            <div class="textarea-control">
              <label for="address">Address :</label>
              <textarea
                name="address"
                id="address"
                cols="30"
                rows="4"
                placeholder="Enter Full Address" autocomplete="off" required
              ></textarea>
            </div>

            <div class="form-control">
              <label for="city">City :</label>
              <input
                type="text"
                id="city"
                name="city"
                placeholder="Enter City" autocomplete="off" required
              />
            </div>

            <div class="form-control">
              <label for="postalcode">Postal Code :</label>
              <input
                type="number"
                id="postalcode"
                name="postalcode"
                placeholder="Enter postal code" autocomplete="off" required
              />
            </div>

            <div class="form-control">
              <label for="date">Date :</label>
              <input type="date" id="date" name="date" value="2023-06-03" />
            </div>

            <div class="upload-control">
              <label for="cvfile">Upload Your CV :</label>
              <input type="file" id="cvfile" name="cvfile" required />
            </div>
            <p class="ppp">Please include your all qualifications in cv file.</p>
            <div class="button-container">
              <button type="submit" id="submit"  name="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
</body>

<!--footer-->
      <?php
  include 'footer.php';
  ?>
