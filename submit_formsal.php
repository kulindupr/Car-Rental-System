<?php
$notification = '';


 if(isset($_POST['submit'])){
    
     $account_name = $_POST['account_name'];
     $bank_name = $_POST['bank_name'];
     $nic_Number = $_POST['nic_number'];
     $accountnumber = $_POST['account_number'];
     $Branchname = $_POST['Branch_name'];

     //validatition 
     if(empty($account_name) || empty($bank_name) || empty($nic_Number) || empty($accountnumber) || empty($Branchname)){
        $notification = 'Please fill all details';
    }
    else {
        
        $conn = mysqli_connect("localhost", "root", "", "carrental");

        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        //insert data to table
      $sql = "INSERT INTO sal (account_name, bank_name, nic_number, account_number, Branch_name)
                VALUES ('$account_name', '$bank_name', '$nic_Number', '$accountnumber', '$Branchname')";

     if (mysqli_query($conn, $sql)) {
            
        $notification = 'Submit successful';
         } else {
           
             $notification = 'Submit not successful';
         }

        
         mysqli_close($conn);
     }
 }
?>


<script>
    
    var notification = '<?php echo $notification; ?>';
    if (notification !== '') {
        
        alert(notification);

        window.location.href = 'sal.php';
    }
</script>
