<?php
include 'header.php';
?>

    <title>Frequently Asked Questions</title>
    <style>
/* Google Font Link */
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500;600&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      .mybody {
        display:flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #61a9fa;
        background-image: url("images/faq\ back.png");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100%;
        padding: 30px;
      }
      ::selection {
        background: #4eb1f4;
        color: #fff;
      }
      .accordion {
        display: flex;
        max-width: 1100px;
        width: 100%;
        align-items: center;
        justify-content: space-between;
        background: hsla(0, 0%, 100%, 0.868);
        border-radius: 25px;
        padding: 35px 65px 15px 40px;
      }
      .accordion .imge {
        height: 360px;
        width: 300px;
      }
      .accordion .imge img {
        height: 100%;
        width: 100%;
        object-fit: contain;
      }
      .accordion .accordion-text {
        width: 60%;
      }
      .accordion .accordion-text .heading {
        font-size: 45px;
        font-weight: 600;
        color: #802af1;
        font-family: "Fira Sans", sans-serif;
      }
      .accordion .accordion-text .content {
        margin-top: 25px;
        height: 263px;
        overflow-y: auto;
      }
      .content::-webkit-scrollbar {
        display: none; /************/
      }
      .accordion .accordion-text li {
        list-style: none;
        cursor: pointer;
      }
      .accordion-text li .question-arrow {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .accordion-text li .question-arrow .question {
        font-size: 20px;
        font-weight: 500;
        color: #4a4a4a;
        transition: all 0.3s ease;
      }
      .accordion-text li .question-arrow .arrow {
        font-size: 20px;
        color: #383838;
        transition: all 0.2s ease;
      }
      .accordion-text li.showAnswer .question-arrow .arrow {
        transform: rotate(-180deg);
      }
      .accordion-text li:hover .question-arrow .question,
      .accordion-text li:hover .question-arrow .arrow {
        color: rgb(3, 220, 220);
      }
      .accordion-text li.showAnswer .question-arrow .question,
      .accordion-text li.showAnswer .question-arrow .arrow {
        color: #03a9f5;
        font-weight: 600;
      }
      .accordion-text li .line {
        display: block;
        height: 2px;
        width: 100%;
        margin: 10px 0;
        background: rgba(0, 0, 0, 0.1);
      }
      .accordion-text li p {
        width: 92%;
        padding-left: 10px;
        font-size: 16px;
        font-weight: 500;
        color: #595959;
        display: none;
      }
      .accordion-text li.showAnswer p {
        display: block;
      }

      /*responsive changes*/

      @media (max-width: 994px) {
        body {
          padding: 40px 20px;
        }
        .accordion {
          max-width: 100%;
          padding: 45px 60px 45px 60px;
        }
        .accordion .imge {
          height: 360px;
          width: 220px;
        }
        .accordion .accordion-text {
          width: 63%;
        }
      }

      @media (max-width: 820px) {
        .accordion {
          flex-direction: column;
        }
        .accordion .imge {
          height: 360px;
          width: 300px;
          background: rgba(59, 153, 247, 0.684);
          width: 100%;
          border-radius: 25px;
          padding: 30px;
        }
        .accordion .accordion-text {
          width: 100%;
          margin-top: 30px;
        }
      }
      @media (max-width: 538px) {
        .accordion {
          padding: 25px;
        }
        .accordion-text li p {
          width: 98%;
        }}  
    </style>
    <!--icon link-->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

<?php 
include_once 'navigation.php'; 
?>

<div class="mybody">
    <div class="accordion">
      <div class="imge">
        <img src="images/FAQ-removebg.png" alt="FAQ image" />
      </div>
      <div class="accordion-text">
        <div class="heading">FAQ</div>
        <ul class="content">
          <li>
            <div class="question-arrow">
              <span class="question"
                >How can I rent a car from Quick Drive?</span
              >
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>
              Renting a car from Quick Drive is simple. Just visit our website,
              select your desired location, dates, and vehicle type, and proceed
              with the reservation process. You can also contact our customer
              support for assistance.
            </p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question"
                >What are the requirements to rent a car?</span
              >
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>
              To rent a car from Quick Drive, you need to meet the following
              requirements: be at least 21 years old, have a valid driver's
              license, and provide a valid credit card for payment and security
              deposit purposes.
            </p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question"
                >Can I rent a car if I am under 25 years old?</span
              >
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>
              Yes, we offer car rentals to customers who are 21 years or older.
              However, drivers under 25 may be subject to a young driver
              surcharge.
            </p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question"
                >What types of vehicles are available for rent?</span
              >
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>
              Quick Drive offers a wide range of vehicles to suit your needs,
              including compact cars, sedans, SUVs, and luxury vehicles. You can
              choose the vehicle type that best fits your preferences and
              requirements.
            </p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question"
                >Is insurance included with the rental?</span
              >
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>
              Yes, all rentals include basic insurance coverage. However,
              additional coverage options, such as collision damage waivers, are
              available at an extra cost.
            </p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question"
                >How do I make a payment for my car rental?</span
              >
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>
              You can conveniently pay for your rental cash or online using a
              major credit card. We accept Visa, Mastercard.
            </p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question"
                >What should I do if I encounter any issues with the rental
                car?</span
              >
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>
              If you experience any issues with the rental car, please contact
              our 24/7 customer support immediately. We will assist you and
              provide guidance on how to proceed.
            </p>
            <span class="line"></span>
          </li>
        </ul>
      </div>
    </div>
</div>

    <script>
      let li = document.querySelectorAll(".content li");
      for (var i = 0; i < li.length; i++) {
        li[i].addEventListener("click", (e) => {
          let clickedLi;
          if (e.target.classList.contains("question-arrow")) {
            clickedLi = e.target.parentElement;
          } else {
            clickedLi = e.target.parentElement.parentElement;
          }
          clickedLi.classList.toggle("showAnswer");
        });
      }
    </script>
  </body>
  
  <?php
  include 'footer.php';
  ?>

