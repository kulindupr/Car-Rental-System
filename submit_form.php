<?php

$notification = '';


if(isset($_POST['submit'])){
    
    $name_one = $_POST['first_name'];
    $second_name = $_POST['last_name'];
    $nic_number = $_POST['nic_number'];
    $telnumber = $_POST['mobile'];
    $message = $_POST['opinions'];

    
    if(empty($name_one) || empty($second_name) || empty($nic_number) || empty($telnumber) || empty($message)){
        $notification = 'Please fill all details';
    }
    else {
        
        $conn = mysqli_connect("localhost", "root", "", "carrental");

        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        
        $sql = "INSERT INTO feedback (first_name, last_name, nic_number, mobile, opinions)
                VALUES ('$name_one', '$second_name', '$nic_number', '$telnumber', '$message')";

        if (mysqli_query($conn, $sql)) {
            
            $notification = 'Submit successful';
        } else {
            
            $notification = 'Submit not successful';
        }

        
        mysqli_close($conn);
    }
}
?>

<!-- JavaScript code -->
<script>
    // 
    var notification = '<?php echo $notification; ?>';
    if (notification !== '') {
   
        alert(notification);

        
        window.location.href = 'feedback.php';
    }
</script>
