<?php
require_once('db.php');

$query = "SELECT * FROM feedback";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css\getdata.css" />
    <title>View Records</title>
</head>

<body>
    <div class="tablearea">
        <div class="datarow">
            <div class="tablecol">
                <div class="tablecard">
                    <div class="cardheader">
                        <h2>PREVIOUS FEEDBACKS</h2>
                    </div>
                    <div class="cardbody">
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Opinion</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            while ($data = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $data['first_name']; ?></td>
                                    <td><?php echo $data['opinions']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $data['opinions']; ?>">Edit</a>
                                    </td>
                                    <td>
                                        <a href="delete.php?id=<?php echo $row['opinions']; ?>">Delete</a>
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
