<!--widthdrawal page -->
<?php
    include_once 'header.php';
    require_once('connection_bd_sal.php');

     $query = "SELECT * FROM sal";
     $result = mysqli_query($con, $query);

     //check the notification
     $notification = isset($_GET['notification']) ? $_GET['notification'] : '';
?>


 <link rel="stylesheet" href="css/sal.css">
 <link rel="stylesheet" href="Css/getdatasal.css" />

<style>
     footer{
             margin-top: 6%;
         }
 </style>





<?php
    include_once 'navigation.php';
?>




<div class="contact">
    <div class="title">
        <h2><u>Widthdraw Monthly salary<u></h2>
    </div>
     <div class="box">
       
      <div class="cntacts form">
            
          <form method="post" action="submit_formsal.php">
             <div class="formbox">
                 <div class="row50">
                        <div class="inputbox">
                            <span>Account Name :</span>
                            <input type="text" name="account_name" placeholder="Enter here" value="">
                        </div>
                        <div class="inputbox">
                            <span>bank Name :</span>
                            <input type="text" name="bank_name" placeholder="Enter here" value="">
                        </div>
                    </div>

                    <div class="row50">
                        <div class="inputbox">
                            <span>NIC Number :</span>
                            <input type="text" name="nic_number" placeholder="Enter here" value="">
                        </div>
                        <div class="inputbox">
                            <span>Account Number :</span>
                            <input type="text" name="account_number" placeholder="Enter here" value="">
                        </div>
                    </div>

                    <div class="row100">
                        <div class="inputbox">
                            <span> Branch name :</span>
                            <textarea name="Branch_name" placeholder="Enter here"></textarea>
                        </div>
                    </div>

                    <div class="row100">
                        <div class="inputbox">
                            <input type="submit" name="submit" value="Submit">
                        </div>
                  </div>

                </div>
            </form>
        </div>
       
        <div class="container">
            <div class="row">
              <div class="col">
               <div class="card">
                      <div class="card-header">
                        <h2>details</h2>
                        </div>
                    <div class="card-body">
                          <table>
                                <tr>
                                    <th>Account Name</th>
                                    <th>Branch Name</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['account_name']; ?></td>
                                        <td><?php echo $row['Branch_name']; ?></td>
                                        <td>
                                            <a href="editsal.php?f_id=<?php echo $row['f_id']; ?>" onclick="askNicNumber(event, '<?php echo $row['nic_number']; ?>')">Update</a>
                                        </td>
                                        <td>
                                            <a href="deletesal.php?f_id=<?php echo $row['f_id']; ?>" onclick="askNicNumber(event, '<?php echo $row['nic_number']; ?>')">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                          </table>
                      </div>
                    </div>
             </div>
            </div>
        </div>
    </div>
</div>




 <p class="pages">> Make sure You can request for widthdraw only every month 10-15...<br>if couldn't request before 15 please contact us through the email or tel-phone then we will give your salary <br><br>
 > if you requese more than onee time correctly we will remove the other requests.</p>







<?php include_once 'footer.php'; ?>


<script>
    //check the notification
    var notification = '<?php echo $notification; ?>';
    if (notification !== '') {
  //show that notification
        alert(notification);

       //redirect directly to the main page
        window.location.href = 'sal.php';
    }

    function askNicNumber(event, rowNicNumber) {
        event.preventDefault();

        var nicNumber = prompt('Enter NIC number:'); 

        if (nicNumber && nicNumber === rowNicNumber) {
           //nic number check 
            var url = event.target.href + '&nic_number=' + encodeURIComponent(nicNumber);
            window.location.href = url;
        } else {
            alert('NIC number does not match.'); 
        }
    }
</script>
