<?php
require_once('connection_bd_sal.php');

$query = "SELECT * FROM sal";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css\getdatasaal.css" />
    <title>Records of details</title>
</head>

<body>
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
                                <th>Account name</th>
                                <th>Branch Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                             </tr>
                             <?php
                             while ($row = mysqli_fetch_assoc($result)) {
                                 ?>
                                 <tr>
                                     <td><?php echo $row['account_name']; ?></td>
                                     <td><?php echo $row['Branch_name']; ?></td>
                                     <td>
                                         <a href="editsal.php?id=<?php echo $row['Branch_name']; ?>">Edit</a>
                                     </td>
                                     <td>
                                         <a href="deletesal.php?id=<?php echo $row['Branch_name']; ?>">Delete</a>
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
</body>

</html>
