<?php
    require_once('connection_bd_sal.php');

    
    if (isset($_GET['f_id'])) {
        $editId = $_GET['f_id'];

        
        $query = "SELECT * FROM sal WHERE f_id = '$editId'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
         
            $accountname = $_POST['account_name'];
             $bankname = $_POST['bank_name'];
             $nicNumber = $_POST['nic_number'];
             $accountnumber = $_POST['account_number'];
            $Branchname = $_POST['Branch_name'];

           
            $updateQuery = "UPDATE sal SET account_name='$accountname', bank_name='$bankname', nic_number='$nicNumber', account_number='$accountnumber', Branch_name='$Branchname' WHERE f_id='$editId'";
            $updateResult = mysqli_query($con, $updateQuery);

            if ($updateResult) {
               
                header("Location: sal.php?notification=Update successful");
                exit();
            } else {
                
                header("Location: sal.php?notification=Update failed");
                exit();
            }
        }

        
         $accountname = $row['account_name'];
         $bankname = $row['bank_name'];
         $nicNumber = $row['nic_number'];
         $accountnumber = $row['account_number'];
        $Branchname = $row['Branch_name'];

        
        mysqli_close($con);
    } else {
        
        header("Location: sal.php");
        exit();
    }
?>


<?php
    include_once 'header.php';
?>


<link rel="stylesheet" href="css/sal.css">
<link rel="stylesheet" href="Css/getdatasal.css" />


<?php
    include_once 'navigation.php';
?>



<div class="contact">
     <div class="title">
         <h2>update details</h2>
     </div>
     <div class="box">
       
         <div class="cntacts form">
             <h3>Update your details</h3>
             <form method="post" action="editsal.php?f_id=<?php echo $editId; ?>">
                 <div class="formbox">
                     <div class="row50">
                         <div class="inputbox">
                              <span>account name :</span>
                              <input type="text" name="account_name" placeholder="Enter here" value="<?php echo $accountname; ?>">
                          </div>
                          <div class="inputbox">
                              <span>bank name:</span>
                              <input type="text" name="bank_name" placeholder="Enter here" value="<?php echo $bankname; ?>">
                         </div>
                     </div>

                     <div class="row50">
                         <div class="inputbox">
                             <span>NIC Number :</span>
                             <input type="text" name="nic_number" placeholder="Enter here" value="<?php echo $nicNumber; ?>">
                         </div>
                         <div class="inputbox">
                             <span>account number :</span>
                             <input type="text" name="account_number" placeholder="Enter here" value="<?php echo $accountnumber; ?>">
                         </div>
                     </div>

                     <div class="row100">
                         <div class="inputbox">
                             <span>Branch_name :</span>
                             <textarea name="Branch_name" placeholder="Enter here"><?php echo $Branchname; ?></textarea>
                         </div>
                     </div>

                     <div class="row100">
                         <div class="inputbox">
                             <input type="submit" name="submit" value="Update">
                         </div>
                     </div>

                 </div>
             </form>
         </div>
     </div>
</div>

<?php include_once 'footer.php'; ?>
