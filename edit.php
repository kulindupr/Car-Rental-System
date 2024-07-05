<?php
    require_once('db.php');

    
    if (isset($_GET['f_id'])) {
        $editId = $_GET['f_id'];

        
        $query = "SELECT * FROM feedback WHERE f_id = '$editId'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $nameone = $_POST['first_name'];
            $secondname = $_POST['last_name'];
            $nic_number = $_POST['nic_number'];
            $telnumber = $_POST['mobile'];
            $message = $_POST['opinions'];

            
            $updateQuery = "UPDATE feedback SET first_name='$nameone', last_name='$secondname', nic_number='$nicNumber', mobile='$telnumber', opinions='$message' WHERE f_id='$editId'";
            $updateResult = mysqli_query($con, $updateQuery);

            if ($updateResult) {
                
                header("Location: feedback.php?notification=Update successful");
                exit();
            } else {
                
                header("Location: feedback.php?notification=Update failed");
                exit();
            }
        }

        
        $nameone = $row['first_name'];
        $secondname = $row['last_name'];
        $nicNumber = $row['nic_number'];
        $telnumber = $row['mobile'];
        $message = $row['opinions'];

        
        mysqli_close($con);
    } else {
        
        header("Location: feedback.php");
        exit();
    }
?>

<!-- Login page -->

<!-- header section include -->
<?php
    include_once 'header.php';
?>

<!-- style sheet -->
<link rel="stylesheet" href="css/feedback.css">
<link rel="stylesheet" href="Css/getdata.css" />

<!-- navigation section include -->
<?php
    include_once 'navigation.php';
?>

<!-- BODY -->

<div class="contact">
    <div class="title">
        <h2>FEEDBACK UPDATE</h2>
    </div>
    <div class="box">
        <!--form-->
        <div class="cnform">
            <h3>Update your feedback</h3>
            <form method="post" action="edit.php?f_id=<?php echo $editId; ?>">
                <div class="formbox">
                    <div class="row50">
                        <div class="inputbox">
                            <span>First Name :</span>
                            <input type="text" name="first_name" placeholder="Enter here" value="<?php echo $nameone; ?>">
                        </div>
                        <div class="inputbox">
                            <span>Last Name :</span>
                            <input type="text" name="last_name" placeholder="Enter here" value="<?php echo $secondname; ?>">
                        </div>
                    </div>

                    <div class="row50">
                        <div class="inputbox">
                            <span>NIC Number :</span>
                            <input type="text" name="nic_number" placeholder="Enter here" value="<?php echo $nicNumber; ?>">
                        </div>
                        <div class="inputbox">
                            <span>Mobile :</span>
                            <input type="text" name="mobile" placeholder="+94 7X XX XX XXX" value="<?php echo $telnumber; ?>">
                        </div>
                    </div>

                    <div class="row100">
                        <div class="inputbox">
                            <span>Your opinions :</span>
                            <textarea name="opinions" placeholder="Enter your opinions here..."><?php echo $message; ?></textarea>
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
