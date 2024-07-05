<!-- Login page -->

<!-- header section include -->
<?php
     include_once 'header.php';
?>
    <!-- style sheet -->
    <link rel="stylesheet" href="css/rental.css">

<!-- navigation section include -->
<?php
     include_once 'navigation.php';
?>

<!-- BODY -->

    <div class="boxes">
        <form class="box1">
          <div class="header-text">
            <h2>Travel Details</h2>
          </div>
          <label for="vehicle-type" style="color: red;">Vehicle Type:</label>
          <br><br>
          <select id="vehicle-type" name="vehicle-type">
            <option value="generalcar">General Car</option>
            <option value="premiumcar">Premium Car</option>
            <option value="luxurycar">Luxury Car</option>
            <option value="4wdSuv">4WD & SUV Vehicle</option>
            <option value="busVan">Buses, Vans and MPV</option>
          </select><br>
<div class="etxt12">
            <label for="carid" style="color: red;">Car ID</label><br><br>
            <input type="text" name='carid' placeholder="Enter the Car ID" required>
</div>
          <label id="radio" style="color: red;">Driver:</label>
          <input type="radio" id="with-driver" name="driver" value="with-driver">
          <label for="with-driver">With Driver</label>
          <input type="radio" id="without-driver" name="driver" value="without-driver">
          <label for="without-driver">Without Driver</label><br><br>
<div class="etxt12">
            <label for="carid" style="color: red;">Driver ID</label><br><br>
            <input type="text" name='carid' placeholder="Enter the Driver ID" required>
</div>
          <label for="time-period" style="color: red;">Time Period:</label>
          <select id="time-period" name="time-period">
            <option value="1">1 day</option>
            <option value="2">2 days</option>
            <option value="3">3 days</option>
            <option value="4">4 days</option>
            <option value="5">5 days</option>
            <option value="6">6 days</option>
            <option value="7">7 days</option>
          </select><br><br>
          
          <label for="seat-capacity" style="color: red;">Seat Capacity:</label>
          <select id="seat-capacity" name="seat-capacity">
            <option value="4">4 Seats</option>
            <option value="5">5 Seats</option>
            <option value="10">10 Seats</option>
            <option value="14">14 Seats</option>
          </select><br><br>
          
          <button type="submit">Submit</button>
        </form>
    
        <div class="box2">
          <div class="header-text">
            <h2>Packages</h2>
          </div>
          <div class="wedding">
            <a href="#">
            <img src="images/wedding pack.jpeg" alt="wedding img">
            <p>wedding packages</p>
            </a>
  
          </div>
          <div class="traveling">
            <a href="#">
            <img src="images/traveling pack.jpg" alt="travel image">
            <p>Traveling packages</p>
            </a>
  
          </div>
        </div>
      </div>
  
</body>


<!-- footer section include -->
<?php
     include_once 'footer.php';
?>