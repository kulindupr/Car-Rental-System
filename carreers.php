<?php
include 'header.php';
?>

    <title>QuickDrive Job Opportunities</title>
    <style>
      .mybody {
        margin: 0;
        padding: 0;
        width: 100%;
        min-height: 100vh;
        font-family: Arial, Helvetica, sans-serif;
        animation: change 20s infinite ease-out;
        background-size: cover;
        position: relative;
        background-repeat: no-repeat;
        background-position: center;
      }

      .section_top {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
      }

      .content-box {
        position: relative;
        margin: 50px auto;
        padding: 30px;
        background-color: #275679c2;
        width: 50%;
        border-radius: 10px;
        border: 2px solid rgba(0, 255, 255, 0.295);
      }

      .content-box h1 {
        text-align: center;
        position: relative;
      }

      .box1 {
        position: relative;
        margin: 10px auto;
        background-color: rgba(70, 144, 255, 0.288);
        padding: 10px;
      }

      .box2 {
        position: relative;
        margin: 10px auto;
        background-color: rgba(0, 255, 255, 0.288);
        padding: 10px;
        margin-top: 30px;
      }

      .ppp {
        font: 20px arial;
      }
      button {
        cursor: pointer;
        background-color: rgb(28, 63, 170);
        border: transparent solid 1px;
        padding: 8px 12px;
      }

      .button_container {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
      }

      button:hover {
        background-color: #ff578b;
      }
      .box1:hover {
        background-color: rgba(70, 144, 255, 0.474);
      }
      .box2:hover {
        background-color: rgba(0, 255, 255, 0.497);
      }

      .icon {
        display: flex;
      }
      span {
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

      .hh1 {
        margin-top: 0;
        border: 2px solid black;
        padding: 10px;
      }
      span:hover {
        background: #ff578b;
      }

      .hh2 {
        margin-top: 2px;
      }
      .aa {
        text-decoration: none;
        color: aliceblue;
      }
      @keyframes change {
        0% {
          background-image: url("images/driver\ 1.jpg");
        }
        20% {
          background-image: url("images/mechanic\ 5.jpg");
        }
        40% {
          background-image: url("images/driver\ 3.jpg");
        }
        60% {
          background-image: url("images/mechanic\ 2.jpg");
        }
        80% {
          background-image: url("images/driver\ 4.jpg");
        }
        100% {
          background-image: url("images/mechanic\ 3.jpg");
        }
      }

      @media screen and (max-width: 768px) {
        h1,
        h2 {
          font-size: 20px;
        }
      }
      @media screen and (max-width: 280px) {
        h1,
        h2 {
          font-size: 10px;
        }
      }
      @media screen and (max-width: 500px) {
        body {
          overflow-x: auto;
        }
      }
    </style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var box1 = document.querySelector(".box1");
    var box2 = document.querySelector(".box2");
    var section = document.querySelector(".section_top");

    box1.addEventListener("mouseover", function () {
      section.style.backgroundImage = "url('images/driver%201.jpg')";
    });

    box2.addEventListener("mouseover", function () {
      section.style.backgroundImage = "url('images/mechanic%203.jpg')";
    });

    box1.addEventListener("mouseout", function () {
      section.style.backgroundImage = "";
    });

    box2.addEventListener("mouseout", function () {
      section.style.backgroundImage = "";
    });
  });
</script>

<?php 
include_once 'navigation.php'; 
?>

<div class="mybody">
    <div class="section_top">
      <div class="content-box">
        <h1 class="hh1">JOB OPPORTUNITIES</h1>
        <div class="box1">
          <div class="icon">
            <span><ion-icon name="speedometer"></ion-icon></span>
            <h2 class="hh2">DRIVER</h2>
          </div>
          <p class="ppp">
            We are excited to announce that our online car rental system is
            currently seeking skilled and experienced mechanics to join our
            team.As a mechanic at our rental company ,you will be responsible
            for performing routine maintenance and repairs on our fleet of
            vehicles to ensure their safety and reliability for our customers.
          </p>
          <div class="button_container">
            <button type="submit">
              <a class="aa" href="jobdriver.php"> Apply Now </a>
            </button>
          </div>
        </div>

        <div class="box2">
          <div class="icon">
            <span><ion-icon name="hammer"></ion-icon></span>
            <h2>MECHANIC</h2>
          </div>
          <p class="ppp">
            We are pleased to announce that our online car rental system is
            currently looking for dependable and experienced drivers to join our
            team.The ideal candidate should process a valid driver's license,a
            clean driving record,and excellent customer service skills.
          </p>
          <div class="button_container">
            <button type="submit">
              <a class="aa" href="mechanic_application.php"> Apply Now </a>
            </button>
          </div>
        </div>
      </div>
    </div>
</div>
    <!--icon link-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </div>

  <?php
  include 'footer.php';
  ?>
