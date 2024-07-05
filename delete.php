<?php
    require_once('db.php');

    
    if (isset($_GET['f_id'])) {
        $deleteId = $_GET['f_id'];

        
        $query = "DELETE FROM feedback WHERE f_id = '$deleteId'";
        $result = mysqli_query($con, $query);

        if ($result) {
            $notification = "Record deleted successfully.";
        } else {
            $notification = "Error deleting record: " . mysqli_error($con);
        }

        
        mysqli_close($con);
    } else {
        
        header("Location: feedback.php");
        exit();
    }

    
    header("Location: feedback.php?notification=" . urlencode($notification));
    exit();
?>
