<!-- Login page -->

<!-- header section include -->
<?php
    include_once 'header.php';
    require_once('db.php');

    $query = "SELECT * FROM feedback";
    $result = mysqli_query($con, $query);

    // Check if a notification is set
    $notification = isset($_GET['notification']) ? $_GET['notification'] : '';
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
        <h2>FEEDBACK</h2>
    </div>
    <div class="box">
        <!--form-->
        <div class="cntactsform">
            <h3>Send us your feedback</h3>
            <form method="post" action="submit_form.php">
                <div class="formbox">
                    <div class="row50">
                        <div class="inputbox">
                            <span>First Name :</span>
                            <input type="text" name="first_name" placeholder="Enter here">
                        </div>
                        <div class="inputbox">
                            <span>Last Name :</span>
                            <input type="text" name="last_name" placeholder="Enter here">
                        </div>
                    </div>

                    <div class="row50">
                        <div class="inputbox">
                            <span>NIC Number :</span>
                            <input type="text" name="nic_number" placeholder="Enter here">
                        </div>
                        <div class="inputbox">
                            <span>Mobile :</span>
                            <input type="text" name="mobile" placeholder="+94 7X XX XX XXX" >
                        </div>
                    </div>

                    <div class="row100">
                        <div class="inputbox">
                            <span>Your opinions :</span>
                            <textarea name="opinions" placeholder="Enter your opinions here..."></textarea>
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
        <!--table-->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2>PREVIOUS FEEDBACKS</h2>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <th>Name</th>
                                    <th>Opinions</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['first_name']; ?></td>
                                        <td><?php echo $row['opinions']; ?></td>
                                        <td>
                                            <a href="edit.php?f_id=<?php echo $row['f_id']; ?>" onclick="askNicNumber(event, '<?php echo $row['nic_number']; ?>')">Update</a>
                                        </td>
                                        <td>
                                            <a href="delete.php?f_id=<?php echo $row['f_id']; ?>" onclick="askNicNumber(event, '<?php echo $row['nic_number']; ?>')">Delete</a>
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

<?php include_once 'footer.php'; ?>

<!-- JavaScript code -->
<script>
    
    var notification = '<?php echo $notification; ?>';
    if (notification !== '') {
        
        alert(notification);

        
        window.location.href = 'feedback.php';
    }

    function askNicNumber(event, rowNicNumber) {
        event.preventDefault(); 

        var nicNumber = prompt('Enter NIC number:'); 

        if (nicNumber && nicNumber === rowNicNumber) {
            
            var url = event.target.href + '&nic_number=' + encodeURIComponent(nicNumber);
            window.location.href = url;
        } else {
            alert('NIC number does not match.');
        }
    }
</script>
