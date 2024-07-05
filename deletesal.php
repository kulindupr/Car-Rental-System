<?php
    require_once('connection_bd_sal.php');

    
     if (isset($_GET['f_id'])) {
         $deleteId = $_GET['f_id'];

        
         $query = "DELETE FROM sal WHERE f_id = '$deleteId'";
         $result = mysqli_query($con, $query);

         if ($result) {
             $notification = "Record deleted successfully.";
         } else {
            $notification = "Error deleting record: " . mysqli_error($con);
         }

       
         mysqli_close($con);
    } else {
        
         header("Location: sal.php");
        exit();
    }

    
     header("Location: sal.php?notification=" . urlencode($notification));
     exit();
?>
