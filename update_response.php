<?php
include 'header.php';
?>

    <title>Edit Response / QuickDrive Customer care</title>

    <style>
      /*Google Font Link*/
      @import url("https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppons", sans-serif;
      }

      .bbd {
        background: linear-gradient(
          90deg,
          #0e3959 0%,
          #0e3959 30%,
          #03a9f5 30%,
          #03a9f5 100%
        );
        background-image: url("images/mechanic 2.jpg");
        background-size:100%;
        background-position: center;
        background-repeat:no-repeat;
      }

      .contact {
        position: relative;
        width: 100%;
        padding: 40px 100px;
      }
      .contact .title {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2em;
      }
      .contact .title h2 {
        color: aliceblue;
        font-weight: 500;
      }

      .form {
        grid-area: form;
      }
      .info {
        grid-area: info;
      }
      .map {
        grid-area: map;
      }
      .cntacts {
        padding: 40px;
        background: #0e3859a5;
        box-shadow: 0 5px 35px rgba(0, 0, 0, o.15);
      }
      .box {
        position: relative;
        display: grid;
        grid-template-columns: 2fr 1fr;
        grid-template-rows: 5fr 4fr;
        grid-template-areas:
          "form info"
          "form map";
        grid-gap: 20px;
        margin-top: 20px;
      }

      .cntacts h3 {
        color: #18b7ff;
        font-weight: 700;
        font-size: 1.4em;
        margin-bottom: 10px;
      }

      /*form*/
      .formbox {
        position: relative;
        width: 100%;
      }
      .formbox .row50 {
        display: flex;
        gap: 20px;
      }
      .inputbox {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
        width: 50%;
      }
      .formbox .row100 .inputbox {
        width: 100%;
      }
      .inputbox span {
        color: #18b7ff;
        margin-top: 10px;
        margin-bottom: 5px;
        font-weight: 500;
      }

      .inputbox input {
        padding: 10px;
        font-size: 1.1em;
        outline: none;
        border: 1px solid #333;
      }
      .inputbox textarea {
        padding: 10px;
        font-size: 1.1em;
        outline: none;
        border: 1px solid #333;
        resize: none;
        min-height: 220px;
        margin-bottom: 10px;
      }
      .inputbox input[type="submit"] {
        background: #18b7ff;
        color: #fff;
        border: none;
        font-size: 1.1em;
        max-width: 120px;
        font-weight: 500;
        cursor: pointer;
        padding: 14px 15px;
      }

      .inputbox input[type="submit"]:hover {
        color: black;
        background-color: #ff578b;
      }

      .inputbox ::placeholder {
        color: #999;
      }

      /*info*/
      .info {
        background: #0e38599d;
      }
      .info h3 {
        color: #fff;
      }
      .info .infobox div {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
      }
      .info .infobox div span {
        min-width: 40px;
        height: 40px;
        color: #fff;
        background: #18b7ff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.5em;
        border-radius: 50%;
        margin-right: 15px;
      }
      .info .infobox div p {
        color: #fff;
        font-size: 1.1em;
      }
      .info .infobox div a {
        color: #fff;
        text-decoration: none;
        font-size: 1.1em;
      }
      .info .infobox div a:hover {
        color: #ff578b;
      }

      .sci {
        display: flex;
        margin-top: 30px;
      }
      .sci li {
        list-style: none;
        margin-left: 15px;
      }
      .sci li a {
        color: #fff;
        font-size: 2em;
        color: #ccc;
      }
      .sci li a:hover {
        color: aqua;
      }

      /*map*/
      .cntactsmap {
        padding: 0;
      }
      .cntactsmap iframe {
        width: 100%;
        height: 100%;
      }

/*responsive design*/
      @media (max-width: 991px) {
        body {
          background: #03a9f5;
        }
        .contact {
          padding: 20px;
        }
        .box {
          grid-template-columns: 1fr;
          grid-template-rows: auto;
          grid-template-areas:
            "form "
            "info"
            "map";
        }
        .formbox .row50 {
          display: flex;
          gap: 0;
          flex-direction: column;
        }
        .inputbox {
          width: 100%;
        }
        .cntacts {
          padding: 30px;
        }
        .cntactsmap {
          min-height: 300px;
          padding: 0;
        }
      }

      .link p {
        color: #7ecbee;
      }
      .link p a {
        color: #03a9f5;
      }

      .link p a:hover {
        color: #ff578b;
      }

      .last {
        display: flex;
        padding: 5px;
        padding-top: 20px;
      }
      .abc {
        padding-left: 1px;
        font-size: 600;
        padding-top: 8px;
        color: #fff;
      }

      .last span {
        min-width: 30px;
        height: 30px;
        color: #fff;
        background: #034a6b;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1em;
        border-radius: 50%;
        margin-right: 15px;
      }
      .buttonbox{
        display: flex;
        align-items: center;
      }
      .buttonbox input{
        background: #18b7ff;
        color: #fff;
        border: none;
        font-size: 1.1em;
        max-width: 120px;
        font-weight: 500;
        cursor: pointer;
        padding: 14px 15px;
        width: 100%;
        padding: 10px;
        font-size: 1.1em;
        outline: none;
        border: 1px solid #333;
        margin-right: 10px;
      }
      .buttonbox input[type="submit"]:hover {
        color: black;
        background-color: #ff578b;
      }
    </style>

<?php 
include_once 'navigation.php'; 
?>

<?php
include 'connection.php';


if (isset($_POST['update'])) {
    //get database data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $issue = $_POST['issue'];

    // Update relavant row database
    $sql = "UPDATE help_and_support SET First_Name='$firstName', Last_Name='$lastName', Email='$email', Mobile='$mobile', Issue='$issue' ORDER BY Request_id DESC LIMIT 1";
    if (mysqli_query($conn, $sql)) 
    {
        echo "<script>alert('Record updated')</script>";
    } else 
    {
        echo "Error updating record: " . mysqli_error($conn);
    }
} elseif (isset($_POST['delete']))
{
    // Delete relavant row from database
    $sql = "DELETE FROM help_and_support ORDER BY Request_id DESC LIMIT 1";
    if (mysqli_query($conn, $sql)) 
    {
        echo '<script>
        if(confirm("Record Deleted. Back to Help And Support Page ?")) 
        {
            window.location.href = "help_and_support.php";
        }else 
        {
            window.location.href = "index.php";
        }
        </script>';
    } else 
    {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// get data form database
$sql = "SELECT * FROM help_and_support ORDER BY Request_id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
?>

<div class="bbd">
    <div class="contact">
      <div class="title">
        <h2>EDIT RESPONSE</h2>
      </div>
      <div class="box">
        <!--form-->
        <div class="cntacts form">
          <h3>Edit your response and press update</h3>
          <form action="" method="post">
            <div class="formbox">
              <div class="row50">
                <div class="inputbox">
                  <span>First Name :</span>
                  <input type="text" name="firstName" value="<?php echo $row['First_Name']; ?>"  autocomplete="off" required>
                </div>
                <div class="inputbox">
                  <span>Last Name :</span>
                  <input type="text" name="lastName" value="<?php echo $row['Last_Name']; ?>" autocomplete="off"  required>
                </div>
              </div>

              <div class="row50">
                <div class="inputbox">
                  <span>Email :</span>
                  <input type="email" name="email" value="<?php echo $row['Email']; ?>"  autocomplete="off" required>
                </div>
                <div class="inputbox">
                  <span>Mobile :</span>
                  <input type="text" name="mobile" pattern='[0-9]{10}' value="<?php echo $row['Mobile']; ?>" autocomplete="off"  required>
                </div>
              </div>

              <div class="row100">
                <div class="inputbox">
                  <span>Describe your issue :</span>
                  <textarea name="issue"  autocomplete="off" required><?php echo $row['Issue']; ?></textarea>
                </div>
              </div>

              <div class="row100">
                <div class="buttonbox">
                    <input type="submit" name="update" value="Update">
                    <input type="submit" name="delete" value="Delete">
                </div>
              </div>
              <div class="last">
                <span><ion-icon name="hammer"></ion-icon></span>
                <div class="abc">
                  Our customer care support will reply you soon...
                </div>
              </div>
            </div>
          </form>
        </div>
        <!--info box-->
        <div class="cntacts info">
          <h3>Contact Info</h3>
          <div class="infobox">
            <div>
              <span><ion-icon name="pin"></ion-icon></span>
              <p>221/B,backers street,Matara<br />Sri Lanka</p>
            </div>
            <div>
              <span><ion-icon name="mail"></ion-icon></span>
              <a href="mailto:Quickdrive_Rent_A_Car@gmail.com"
                >Quickdrive_Rent_A_Car@gmail.com</a
              >
            </div>
            <div>
              <span><ion-icon name="call"></ion-icon></span>
              <a href="tel:+94717764945">+94 71 89 64 775</a>
            </div>
            <!--Social Media Links-->
            <ul class="sci">
              <li>
                <a href="facebook.com"><ion-icon name="logo-facebook"></ion-icon></a>
              </li>
              <li>
                <a href="twitter.com"><ion-icon name="logo-twitter"></ion-icon></a>
              </li>
              <li>
                <a href="linkedin.com"><ion-icon name="logo-linkedin"></ion-icon></a>
              </li>
              <li>
                <a href="instagram.com"><ion-icon name="logo-instagram"></ion-icon></a>
              </li>
            </ul>
          </div>
          <div class="link">
            <p>
              For more info. visit :
              <a href="contactUs"> Contact Us</a>
            </p>
          </div>
        </div>
        <!--map-->
        <div class="cntactsmap">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.796145
                5170207!2d79.97163557841!3d6.914959739214283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!
                4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Insti
                tute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1685560666075!5m2!1se
                n!2slk"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            alt="Google Map"
          ></iframe>
        </div>
      </div>
    </div>
</div>

    <!--icon link-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

<?php
} else 
{
    echo "Please submit a issue first.";
}

//This Close the database connection
mysqli_close($conn);
?>
  </body>
  
  <?php
  include 'footer.php';
  ?>
